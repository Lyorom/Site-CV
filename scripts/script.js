//fonction cible
function $(obj){
    return document.getElementById(obj);
}
//fonction change volume
chgtVolume = function(e){
    monVol = e.target.value;
    if(monVol != 0){
        video.muted=false;
    }
    video.volume=e.target.value;
};
//fonction coupe son
muet = function(){
    video.muted=true;
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
    btn_volume.value = 0.1;
    video.volume= 0.1;
    //on ajoute le gestionnaire d'événement sur le bouton play et pause
    btn_play.addEventListener("click", play);
    //on ajoute le gestionnaire d'événement sur le slider
    btn_volume.addEventListener("change", chgtVolume);
    //on ajoute le gestionnaire d'événement sur le bouton muet
    btn_mute.addEventListener("click", muet);

};
window.addEventListener("load", initVid);

function console() {
    var consolemy = document.getElementById('console');
    consolemy.style.display="block";
}