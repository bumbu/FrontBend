<?php
class Helper{
  static function showProducts($count = 10, $params = Array()){
    $images = Array();
    for($i = 1; $i <= 6; $i++){
      $images[] = "product-$i.png";
    }
    $labels = Array();
    $labels[] = '';
    $labels[] = '';
    $labels[] = '';
    $labels[] = 'label-best.png';
    $labels[] = 'label-bestseller.png';
    $labels[] = 'label-gift.png';
    $labels[] = 'label-new.png';

    $titles = Array();
    $titles[] = 'Термос с пневмонасосом TAF Penguin, cтальная колба, 2 литра';
    $titles[] = 'Термос крутой Живодёр, две ручки, 5 литров';
    $titles[] = 'Пулемёт стрёмный, Много';
    $titles[] = 'А тут вообще ежик не был, и яблоко не брал';
    
    srand(time());
    for($i = 0; $i < $count; $i++){
      F3::set('product_i', $i);
      F3::set('product_image', $images[rand(0, count($images)-1)]);
      F3::set('product_label', $labels[rand(0, count($labels)-1)]);
      F3::set('product_title', $titles[rand(0, count($titles)-1)]);

      if(isset($params['showDetails']) && $params['showDetails']){
        F3::set('showDetails', true);
      }else{
        F3::set('showDetails', false);
      }

      echo Template::serve('_product.html');
    }
  }
}