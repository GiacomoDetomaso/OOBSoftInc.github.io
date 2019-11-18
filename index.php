<html>
<?php
echo "Ciao PHP;
?>
<!--Test-->
<script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
<script src="https://raw.githack.com/jeromeetienne/AR.js/2.0.6/aframe/build/aframe-ar.js"></script>
  <body style='margin : 0px; overflow: hidden;'>
    <a-scene embedded arjs='sourceType: webcam; debugUIEnabled: false;'>
      <a-marker type="pattern" url="https://raw.githubusercontent.com/OOBSoftInc/main/master/big_ben.patt"> 
        <a-obj-model scale="0.05 0.05 0.05" src="https://raw.githubusercontent.com/OOBSoftInc/3dModelsVR/master/Big%20Ben/10059_big_ben_v2_max2011_it1.obj" mtl="https://raw.githubusercontent.com/OOBSoftInc/3dModelsVR/master/Big%20Ben/10059_big_ben_v2_max2011_it1.mtl"></a-obj-model>  
      </a-marker>
      <a-entity camera></a-entity>
    </a-scene>
  </body>
</html>
