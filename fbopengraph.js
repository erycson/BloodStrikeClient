//分享到Stories
function shareStories(callback, name){

    var name = name  || 'none';

    FB.getLoginStatus(function(response) {

        if(response.status === 'connected') {

            FB.api('/me/permissions', function(response) {

                var myPermissions = response.data,
                    status = false;

                for (var i = 0; i < myPermissions.length; i++) {
                    if(myPermissions[i].permission === 'publish_actions' && myPermissions[i].status === 'granted') {
                        status = true;
                        break;
                    }
                };

                if (status) {

                    callback(name);

                } else {

                    FB.login(function(response) {

                        callback(name);

                    }, {
                        scope: 'publish_actions'
                    });

                }

            });

        }

    });

}

//分享等级
function beginShareLevel(option) {

    /*FB.api(
        'me/blood-strike:reach',
        'post',
        {
            'level': {
                'fb:app_id': '681463031893735',
                'og:url': 'https://br-game.xcloudgame.com/statics/opengraph/html/levelshare.html',
                'og:title': 'Sentiu o calor da minha bala?',
                'og:description': 'É eu! Estou chegando... De hs em hs, é mais um nível que aumentei em Blood Strike! Sempre avante, nunca regreção, é blood na veia e inimigo abatido! ',
                'og:type': 'blood-strike:level'
            },
            'fb:explicitly_shared' : true
        },
        function(response) {
            //console.log(response);
        }
    );*/
    FB.ui({
        method: 'share_open_graph',
        action_type: 'blood-strike:reach',
        action_properties: {
            'level': {
                'fb:app_id': '681463031893735',
                'og:url': 'https://br-game.xcloudgame.com/statics/opengraph/html/levelshare.html',
                'og:title': 'A batalha me deixou mais forte',
                'og:description': 'Vc esta evoluindo na batalha! Parabéns!',
                'og:type': 'blood-strike:level'
            },
            'fb:explicitly_shared' : true
        }
    }, function(response){
        //console.log(response);
    });

}

//分享称号
function beginShareAce(option) {
    /*FB.api(
        'me/blood-strike:earn',
        'post',
        {
            'ace': {
                'fb:app_id': '681463031893735',
                'og:url': 'https://br-game.xcloudgame.com/statics/opengraph/html/betry.html',
                'og:image': 'https://br-game.xcloudgame.com/statics/opengraph/images/ace.png',
                'og:title': 'Vai encarar?',
                'og:description': 'Jogue com amigos e ganhe ouros grátis! (em breve)',
                'og:type': 'blood-strike:ace'
            },
            'fb:explicitly_shared' : true
        },
        function(response) {
            //console.log(response);
        }
    );*/
    FB.ui({
        method: 'share_open_graph',
        action_type: 'blood-strike:earn',
        action_properties: {
            'ace': {
                'fb:app_id': '681463031893735',
                'og:url': 'https://br-game.xcloudgame.com/statics/opengraph/html/betry.html',
                'og:image': 'https://br-game.xcloudgame.com/statics/opengraph/images/ace1.png',
                'og:title': 'TOMA!!Alguém Melhor?',
                'og:description': option.playerName + ' tornou o Rambo da batalha!',
                'og:type': 'blood-strike:ace'
            },
            'fb:explicitly_shared' : true
        }
    }, function(response){
        //console.log(response);
    });
}

//分享武器
function beginShareWeapon(option) {
    /*FB.api(
        'me/blood-strike:unlock',
        'post',
        {
            'weapon': {
                'fb:app_id': '681463031893735',
                'og:url': 'https://br-game.xcloudgame.com/statics/opengraph/html/betry.html',
                'og:image': 'https://br-game.xcloudgame.com/statics/opengraph/images/theweapon.jpg',
                'og:title': 'Armamento novo na praça!',
                'og:description': 'TVejamos o que você pode fazer com esses brinquedinhos.',
                'og:type': 'blood-strike:weapon'
            },
            'fb:explicitly_shared' : true
        },
        function(response) {
            //console.log(response);
        }
    );*/
    FB.ui({
        method: 'share_open_graph',
        action_type: 'blood-strike:unlock',
        action_properties: {
            'weapon': {
                'fb:app_id': '681463031893735',
                'og:url': 'https://br-game.xcloudgame.com/statics/opengraph/html/betry.html',
                'og:image': 'https://br-game.xcloudgame.com/statics/opengraph/images/theweapon1.png',
                'og:title': 'Parabéns vc liberou mais uma arma nova!',
                'og:description': option.name + ' está ajudando ' + option.playerName + ' ganhar batalha! ',
                'og:type': 'blood-strike:weapon'
            },
            'fb:explicitly_shared' : true
        }
    }, function(response){
        //console.log(response);
    });
}

//分享段位
function beginShareRank(option) {
    /*FB.api(
        'me/blood-strike:promote',
        'post',
        {
            'rank': {
                'fb:app_id': '681463031893735',
                'og:url': 'https://br-game.xcloudgame.com/statics/opengraph/html/betry.html',
                'og:image': 'https://br-game.xcloudgame.com/statics/opengraph/images/rank.png',
                'og:title': 'Promovido!',
                'og:description': 'Tudo em ordem guerreiro, agora você é ' + option.name,
                'og:type': 'blood-strike:rank'
            },
            'fb:explicitly_shared' : true
        },
        function(response) {
            //console.log(response);
        }
    );*/
    FB.ui({
        method: 'share_open_graph',
        action_type: 'blood-strike:promote',
        action_properties: {
            'rank': {
                'fb:app_id': '681463031893735',
                'og:url': 'https://br-game.xcloudgame.com/statics/opengraph/html/betry.html',
                'og:image': 'https://br-game.xcloudgame.com/statics/opengraph/images/rank1.png',
                'og:title': 'Venha para Batalha comigo!!',
                'og:description': option.playerName + 'está mais perto de King!',
                'og:type': 'blood-strike:rank'
            },
            'fb:explicitly_shared' : true
        }
    }, function(response){
        //console.log(response);
    });
}

//分享战绩
function beginShareKill(option) {

    /*var percent,
        noption = parseInt(option.name);

    if(noption <= 15){

        if(noption >= 10){
            percent = '70%';
        } else if(noption >= 5){
            percent = '60%';
        } else {
            percent = '50%';
        }

    } else {

        if(noption >= 20){
            percent = '90%';
        } else {
            percent = '80%';
        }

    }*/

    /*FB.api(
        'me/blood-strike:dominate',
        'post',
        {
            'battle': {
                'fb:app_id': '681463031893735',
                'og:url': 'https://br-game.xcloudgame.com/statics/opengraph/html/betry.html',
                'og:image': 'https://br-game.xcloudgame.com/statics/opengraph/images/kl.jpg',
                'og:title': 'A morte faz fila!',
                'og:description': 'Em apenas uma partida eliminei ' + option + ' advers¨¢rios, ultrapassei ' + percent + ' dos jogadores!',
                'og:type': 'blood-strike:battle'
            },
            'fb:explicitly_shared' : true
        },
        function(response) {
            //console.log(response);
        }
    );*/
    FB.ui({
        method: 'share_open_graph',
        action_type: 'blood-strike:dominate',
        action_properties: {
            'battle': {
                'fb:app_id': '681463031893735',
                'og:url': 'https://br-game.xcloudgame.com/statics/opengraph/html/betry.html',
                'og:image': 'https://br-game.xcloudgame.com/statics/opengraph/images/kl1.jpg',
                'og:title': 'Ninguém pode me parar!',
                'og:description': option.playerName + ' já dominou a batalha!',
                'og:type': 'blood-strike:battle'
            },
            'fb:explicitly_shared' : true
        }
    }, function(response){
        //console.log(response);
    });
}