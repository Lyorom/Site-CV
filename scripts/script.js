//fonction cible
function $(obj){
    return document.getElementById(obj);
}
//fonction change volume
chgtVolume = function(e){
    monVol = e.target.value;
    localStorage.setItem('volume', monVol);
    if(monVol != 0){
        video.muted=false;
    }
    video.volume=e.target.value;
};
//fonction coupe son
muet = function(){
    video.muted=true;
    var mute = 0;
    localStorage.setItem('volume', mute);
    btn_volume.value=0;
};
play = function(){
    if (video.paused) {
        video.play();
    } else {
        video.pause();
    }
};

initVid = function(){
    video = $('video_background');
    btn_play = $('play');
    btn_mute =$('muet');
    btn_volume = $('volume');

    if (localStorage.volume == null) {
        btn_volume.value = 0;
        video.volume= 0;
    }
    else  {
        btn_volume.value = localStorage.getItem('volume');
        video.volume= localStorage.getItem('volume');
    }


    //on ajoute le gestionnaire d'événement sur le bouton play et pause
    btn_play.addEventListener("click", play);
    //on ajoute le gestionnaire d'événement sur le slider
    btn_volume.addEventListener("change", chgtVolume);
    //on ajoute le gestionnaire d'événement sur le bouton muet
    btn_mute.addEventListener("click", muet);

};
window.addEventListener("load", initVid);


    function ConsoleBlock() {
        var panel = document.getElementById('panel');
            panel.style.display="block";
    }

    function ConsoleNone() {
        var panel = document.getElementById('panel');
        panel.style.display="none";
    }
    
    
    // Mobile

    function BoutInNav() {
        var navMobile = document.getElementById('mobile-nav');
        navMobile.style.display="flex";
    }
    function BoutOutNav() {
        var navMobile = document.getElementById('mobile-nav');
        navMobile.style.display="none";
    }

