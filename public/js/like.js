var videoId = 0;

$('.like').on('click', function(event){
    event.preventDefault();
    videoId = event.target.parentNode.parentNode.dataset['videoId'];
    var isLike = event.target.previusElementSibling == null;

    $.ajax({
        method : 'POST',
        url :urlLike,
        data : {isLike: isLike, videoId: videoId, _token: token}
    })

    .done(function(){
        event.target.innerTarget = isLike ? event.target.innerTarget == 'Like' ? 'you like this video' : 'Like' : event.target.innerTarget == 'DisLike' ? 'you dont like this video' : 'DisLike';
        if(isLike){
            event.target.nextElementSibling.innerText = 'Dislike' ;
        }else{
            event.target.previousElementSibling.innerText = 'Like' ;
        }
    });
});