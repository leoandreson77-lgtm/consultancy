import glob
import re

php_files = glob.glob("*.php") + glob.glob("wordpress-theme/dehradun-defence-college/*.php")
img_refs = set()
for f in php_files:
    content = open(f, encoding="utf-8", errors="ignore").read()
    matches = re.findall(r'assets/images/([a-zA-Z0-9_\-\.]+)', content)
    for m in matches:
        img_refs.add((f, m))

images_used = set(m for f, m in img_refs)
print(f"Total unique images referenced: {len(images_used)}")
for img in sorted(images_used):
    files = [f for f, m in img_refs if m == img]
    print(f"{img:40} in {len(files)} files: {', '.join(files[:3])}")
