<?php
 echo cloudinary()->getImageTag($publicId ?? '')->scale($width ?? '', $height ?? '')->serialize();
?><?php /**PATH /opt/lampp/htdocs/sweetman/vendor/cloudinary-labs/cloudinary-laravel/resources/views/components/image.blade.php ENDPATH**/ ?>