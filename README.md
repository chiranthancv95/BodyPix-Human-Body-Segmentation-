# Human Body Segmentation
## Introduction
This program uses the BodyPix module obtained from the tf-js repository.
When the bodypix.html is run, it gives out an object containing the values for discriminating each inidvidual part of the human body.
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
When the bodypix.html is run, an array object is created. <br/>This array object is then converted to .csv file format, where it contains the Part Id numbers for the image provided in the html code based on the image co-ordinates.<br/>


The original repo - https://github.com/tensorflow/tfjs-models/tree/master/body-pix

