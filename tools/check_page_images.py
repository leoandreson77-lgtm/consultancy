import re

files = ['about.php', 'faculty-facilities.php', 'gallery.php', 'contact.php']
for fname in files:
    try:
        content = open(fname, encoding='utf-8').read()
        imgs = re.findall(r'assets/images/([a-zA-Z0-9_\-\.]+)', content)
        print(f"=== {fname} ({len(imgs)} images) ===")
        for img in set(imgs):
            print(f"  - {img}")
    except Exception as e:
        print(f"Error in {fname}: {e}")
