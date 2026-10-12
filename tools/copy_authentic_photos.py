import os
import shutil

src_dir = r"C:\Users\DELL\.gemini\antigravity-ide\scratch\dehradun_defence_college_images"
dest_assets = r"c:\Users\DELL\Desktop\consultancy\assets\images"
dest_theme = r"c:\Users\DELL\Desktop\consultancy\wordpress-theme\dehradun-defence-college\assets\images"

# Mapping of authentic photos to clear, descriptive names
photos_to_copy = {
    # 1. Main Campus Building (Cadets in uniform in front of red-brick building with flag post)
    "IMG_0541-scaled_7a2555dd.jpg": "campus-building-main.jpg",
    
    # 2. Authentic Front Office Reception & Admission Desk with cadets
    "IMG_0539-scaled_5faad76e.jpg": "campus-front-office.jpg",
    
    # 3. Cadets drill / parade ground formation with Dehradun mountain hills backdrop
    "IMG_0453-scaled_5d970308.jpg": "cadets-parade-assembly.jpg",
    
    # 4. Official NDA Girls Wing cadets morning parade in uniform
    "IMG_0420-scaled_624a6919.jpg": "nda-girls-wing-formation.jpg",
    
    # 5. Authentic tiered lecture hall classroom filled with cadets
    "IMG_0147-scaled_3668ae03.jpg": "classroom-lecture-hall-real.jpg",
    
    # 6. Real classroom faculty board instruction session
    "IMG_0150-scaled_f8f558ba.jpg": "classroom-faculty-session.jpg",
    
    # 7. Real classroom teaching & cadet discussion
    "IMG_0149-scaled_b47778c2.jpg": "classroom-smart-board-real.jpg",
    
    # 8. Interactive study hall & library preparation
    "IMG_0154-scaled_5c024130.jpg": "campus-study-library.jpg",
    
    # 9. Cadets physical training & obstacle ground activities
    "pixelmaster-1773983880783_9c611108.jpg": "campus-ground-physical-training.jpg",
    
    # 10. Campus outdoor grounds & drill activities
    "pixelmaster-1773983862167_52435108.jpg": "campus-obstacle-drill-ground.jpg",
    
    # 11. Campus ceremony & cadets celebration
    "WhatsApp-Image-2024-10-24-at-13.46.36_32739e1c.jpeg": "campus-ceremony-celebration.jpg",
    
    # 12. Cadet officer portrait in academy uniform
    "IMG_0206-scaled-e1773489032894_085b8365.jpg": "cadet-officer-portrait.jpg",
    
    # 13. Indoor training setting
    "IMG_0194-scaled_2eae377c.jpg": "cadet-indoor-training.jpg",
}

print("Copying verified authentic photos...")
for src_name, target_name in photos_to_copy.items():
    src_path = os.path.join(src_dir, src_name)
    if os.path.exists(src_path):
        target_path1 = os.path.join(dest_assets, target_name)
        target_path2 = os.path.join(dest_theme, target_name)
        shutil.copy2(src_path, target_path1)
        shutil.copy2(src_path, target_path2)
        sz = os.path.getsize(target_path1) // 1024
        print(f"Copied: {src_name} -> {target_name} ({sz} KB)")
    else:
        print(f"FAILED to find {src_name}")

print("Done copying authentic photos!")
