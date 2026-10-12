import re
import os

catalog_path = r"C:\Users\DELL\.gemini\antigravity-ide\brain\7a9d7e6f-3671-481e-ae77-7c3b99c425ed\scratch\image_catalog.html"
with open(catalog_path, "r", encoding="utf-8") as f:
    text = f.read()

pattern = r'<div class="name">([^<]+)</div>\s*<div class="meta">([^<]+)</div>'
matches = re.findall(pattern, text)

print(f"Total matching items: {len(matches)}")
for name, meta in matches:
    nl = name.lower()
    if not any(k in nl for k in ["gemini", "logo", "icon", "arrow", "banner", "bg", "footer", "header", "vector", "shape"]):
        print(f"{name:55} | {meta}")
