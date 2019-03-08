import cv2
import numpy as np
from matplotlib import pyplot as plt

img = cv2.imread('nachosab.jpg')
kernel = np.ones((5,5),np.float32)/25
dst = cv2.filter2D(img,-1,kernel)
cv2.imwrite('dekho.jpg', dst)

img = cv2.imread('dekho.jpg')

output = img.copy()
overlay = img.copy()
cv2.rectangle(overlay, (0, 0), (img.shape[1], img.shape[0]),(255, 255, 0), -1)
alpha = 0.1

cv2.addWeighted(overlay, alpha, output, 1 - alpha,0, output)
cv2.imwrite('Output.jpg', output)