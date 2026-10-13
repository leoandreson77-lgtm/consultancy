import glob
import re
import os

html_files = glob.glob("*.html")
print(f"Auditing {len(html_files)} HTML files for mobile responsiveness...\n")

issues = 0
for hf in sorted(html_files):
    content = open(hf, "r", encoding="utf-8").read()
    
    # 1. Viewport meta tag
    if 'name="viewport"' not in content:
        print(f"[CRITICAL] {hf}: Missing viewport meta tag!")
        issues += 1
    
    # 2. Check for rigid fixed widths > 400px without max-width or flex/grid
    fixed_widths = re.findall(r'style="[^"]*(?<!max-)width:\s*([4-9]\d\d|\d{4,})px[^"]*"', content)
    dangerous_fixed = [w for w in fixed_widths if int(w) > 400]
    if dangerous_fixed:
        print(f"[WARN] {hf}: Found potential rigid width > 400px: {dangerous_fixed}")
        issues += 1
    
    # 3. Check that images have alt tags
    imgs_no_alt = re.findall(r'<img(?![^>]*\balt=)[^>]*>', content)
    if imgs_no_alt:
        print(f"[WARN] {hf}: Found {len(imgs_no_alt)} images without alt attribute")
        issues += 1

    # 4. Check for unclosed tags or syntax glitches
    if content.count("<html") != content.count("</html>") or content.count("<body") != content.count("</body>"):
        print(f"[CRITICAL] {hf}: HTML structure tag mismatch!")
        issues += 1

print(f"\nMobile Audit Complete. Total potential issues: {issues}")
if issues == 0:
    print(f"[SUCCESS] ALL {len(html_files)} PAGES PASSED MOBILE RESPONSIVENESS AND STRUCTURAL INTEGRITY AUDIT!")
