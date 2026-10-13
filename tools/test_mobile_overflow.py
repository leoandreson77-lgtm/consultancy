import glob
import re
from bs4 import BeautifulSoup

print("=== CHECKING ALL 15 HTML PAGES FOR MOBILE OVERFLOW RISKS ===\n")

html_files = sorted(glob.glob("*.html"))

css_content = open("assets/css/style.css", "r", encoding="utf-8").read()

for hf in html_files:
    soup = BeautifulSoup(open(hf, "r", encoding="utf-8"), "html.parser")
    print(f"--- Checking {hf} ---")
    
    # 1. Inline styles with width or min-width > 300px
    for tag in soup.find_all(style=True):
        style = tag["style"]
        # check fixed width
        fw = re.findall(r'(?<!max-)width:\s*([3-9]\d\d|\d{4,})px', style)
        if fw:
            print(f"  [WARN] {tag.name}.{tag.get('class', [])}: inline width {fw}px -> {style[:60]}")
        mw = re.findall(r'min-width:\s*([3-9]\d\d|\d{4,})px', style)
        if mw:
            print(f"  [WARN] {tag.name}.{tag.get('class', [])}: inline min-width {mw}px -> {style[:60]}")
            
    # 2. Check for tables without table-responsive wrapper
    for tbl in soup.find_all("table"):
        parent = tbl.parent
        classes = parent.get("class", []) if parent else []
        if "table-responsive" not in classes:
            print(f"  [WARN] Table not wrapped in .table-responsive: parent={parent.name}.{classes}")

    # 3. Check for elements with nowrap
    for tag in soup.find_all(style=True):
        if "white-space: nowrap" in tag["style"] or "white-space:nowrap" in tag["style"]:
            # check length of text
            txt = tag.get_text().strip()
            if len(txt) > 25:
                print(f"  [WARN] Long text with white-space:nowrap ({len(txt)} chars): {txt[:35]}...")

    # 4. Check repeat(auto-fit, minmax(280px+))
    for tag in soup.find_all(style=True):
        if "minmax(" in tag["style"]:
            print(f"  [INFO] minmax in {tag.name}: {tag['style'][:80]}")

print("\n=== SCAN FINISHED ===")
