<?php

function home_page_display() {
    $output = '<div id="main-content">';
    $output .= '<div id="intro-and-register">';
    $output .= '<div id="intro">';
    $output .= '<div id="intro-title">须臾是一种态度</div>';
    $output .= '<div id="intro-body">刹那者为一念，二十念为一瞬，二十瞬为一弹指，二十弹指为一罗预，二十罗预为一须臾，一日一夜为三十须臾。<br /><br />《仪礼·燕礼》：“寡君有不腆之酒，以请吾子之与寡君须臾焉，使某也以请。”《文选·离骚》：“折若木以拂日兮，聊须臾以相羊。” 李善注引 王逸曰：“须臾、相羊，皆游也。”一本作“ 逍遥 ”。</div>';
    $output .= '</div>';
    $output .= '<div id="register">';
    $output .= '<div class="register-label">注册</div>';
    $output .= '<div style="font-size: 12px; margin: 0px 0px 0px 12px;"></div>';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '<div id="contact-info">';
    $output .= '<div id="location-and-phone" class="contact-matrix">';
    $output .= '<div id="location" class="contact-matrix-big" style="background-color: black; ">';
    $output .= '<div class="matrix-big-font">地址</div>';
    $output .= '<div class="matrix-small-font">啦啦啦，这里是地址</div>';
    $output .= '</div>';
    $output .= '<div id="phone" class="contact-matrix-small" style="background-color: #e4365b;">';
    $output .= '<div><img src=""/></div> ';
    $output .= '<div style="margin: 5px 0px 0px 10px; font-size: 12px;">0123456789</div>';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '<div id="schedule" class="contact-matrix" style="margin-left: 10px;">';
    $output .= '<div id="" class="contact-matrix-big" style="background-color: #2978ee;">';
    $output .= '<div class="matrix-big-font">日程</div>';
    $output .= '<div class="matrix-small-font">啦啦啦，这里是日程</div>';
    $output .= '</div>';
    $output .= '<div id="" class="contact-matrix-small transparent-content">';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '<div id="trip" class="transparent-content">';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '<div id="img-node">';
    for ($i = 0; $i < 3; $i++) {
        if ($i == 0) {
            $output .= '<div class="img-matrix">';
        } else {
            $output .= '<div class="img-matrix" style="margin-left: 10px;">';
        }
        $output .= '<div><img src="/images/background1.jpg" width="220px" height="150px;"/></div>';
        $output .= '<div class="img-matrix-label">';
        $output .= '<div style="padding: 5px;">按时发放热水</div>';
        $output .= '</div>';
        $output .= '</div>';
    }


    $output .= '</div>';
    $output .= '</div>';

    return $output;
}

?>
