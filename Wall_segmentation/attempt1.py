import cv2
import numpy as np

first = cv2.imread('‪G:\Assignments\Quleep - ARnxt\Walls\img1.jpg')
second = cv2.imread('G:\Assignments\Quleep - ARnxt\Color_patterns\gr.jpg')
mix = cv2.addWeighted(first, 0.5, second, 0.9, 0)

img_arr = np.hstack((first, second))
cv2.imshow('Input Images',img_arr)
cv2.imshow('Overlay Image', mix)

cv2.waitKey(0)
cv2.destroyAllWindows()
