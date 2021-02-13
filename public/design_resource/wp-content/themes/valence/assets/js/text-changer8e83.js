jQuery(document).ready(function($) {
    var pos = 0, a = 0;
    var html = "";

    function displayText(){
        if( pos >= valence_txt_changer.length ) pos = 0;
        if( valence_txt_changer.length ){
            if( a < valence_txt_changer[pos].length ){
                html += valence_txt_changer[pos].charAt(a);
                $(".text-change").html(html);
                a++;
            } else {
                a = 0;
                pos++;
                html = "";
            }
        }
    }
    setTimeout( setInterval(displayText, 200) , 200000000);
});