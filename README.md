# Human Body Segmentation
## Introduction
This program uses the BodyPix module obtained from the tf-js repository.<br/>
When the abc.html is run, it gives out an object containing the values for discriminating each inidvidual part of the human body.<br/>
The program can discriminate 24 parts of the human body.<br/>
Part Id -	Part Name<br/>
-1 -	(no body part)<br/>
0 -	leftFace<br/>
1 -	rightFace<br/>
2 -	rightUpperLegFront<br/>
3 -	rightLowerLegBack<br/>
4 -	rightUpperLegBack<br/>
5 -	leftLowerLegFront<br/>
6 -	leftUpperLegFront<br/>
7 -	leftUpperLegBack<br/>
8 -	leftLowerLegBack<br/>
9 -	rightFeet<br/>
10 -	rightLowerLegFront<br/>
11 -	leftFeet<br/>
12 -	torsoFront<br/>
13 -	torsoBack<br/>
14 -	rightUpperArmFront<br/>
15 -	rightUpperArmBack<br/>
16 -	rightLowerArmBack<br/>
17 -	leftLowerArmFront<br/>
18 -	leftUpperArmFront<br/>
19 -	leftUpperArmBack<br/>
20 -	leftLowerArmBack<br/>
21 -	rightHand<br/>
22 -	rightLowerArmFront<br/>
23 -	leftHand<br/>


## Decoding the Data
When the abc.html is run, an array object is created. <br/>This array object is then converted to .csv file format, where it contains the Part Id numbers for the image provided in the html code based on the image co-ordinates.<br/>

## Usage
1. Run the abc.html(Note-Replace the name of the source image file that u want to use with. The image must be of the size 640*480 resolution only).
2.Check for the generated example_new.csv file.
3.Run the BodyPix_latest.ipynb.(Note- Change the Part Id based on your requirement)
4.Check for the saved results as morphed.jpg and detected_face.jpg.





The original repo - https://github.com/tensorflow/tfjs-models/tree/master/body-pix

