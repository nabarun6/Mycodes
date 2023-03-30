from PIL import Image

im1 = Image.open(r"‪G:\Assignments\Quleep - ARnxt\Walls\in.png")
im2 = Image.open(r"G:\Assignments\Quleep - ARnxt\Color_patterns\gr.jpg")

im1.paste(im2, (0, 0), mask = im2)

im1.show()
