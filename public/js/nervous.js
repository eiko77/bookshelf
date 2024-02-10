'use strict';
//DOMContentLoaded イベント_ HTML ページの読み込みが完了し HTML のパース(解析)が完了して DOM ツリーの構築が完了した時点で発生するイベント
//このイベントは addEventListener メソッドの引数としてのみ利用
document.addEventListener('DOMContentLoaded', () => {
    //クラスの作成
    class Card {
        constructor(suit, num) {
            //コンストラクタ支配下のthisはインスタンス生成
            //プロパティ名_カードのスート（S:スペード、d：ダイヤ・・・）
            this.suit = suit;
            //カードの数字
            this.num = num;
            //カードの画像
            this.front = `${suit}${num < 10 ?'0':''}${num}.gif`;
        }
    }

    //カード配列作成
    const cards = [];
    //カードスート配列
    const suits = ['s', 'd', 'h', 'c'];
    //2重forループで52枚のカードを作成
    for (let i = 0; i < suits.length; i++) {
        for (let j = 1; j <= 13; j++) {
            //カードインスタンス生成（s1,s2....c13)
            let card = new Card(suits[i], j);
            //配列の末尾に追加
            cards.push(card);
        }
    }
    let firstCard = null;//1枚目のカードを保持（引いてない場合null)
    let secondCard = null;//2枚目のカードを保持（引いてない場合null)
    //クリックした再の関数を定義
    const flip = (eve) => {
        //クリックされた要素を特定
        let div = eve.target;
        //toggle(OnOff切り替え)
        //div.classlist.toggle('back'); };//もうこの処理は不要
        if (!div.classList.contains('back') || secondCard != null) {
            return;
        }
        //表面にする
        div.classList.remove('back');
        //もし1枚目だったらfirstCardに代入
        if (firstCard === null) {
            firstCard = div;
        } else {
            //2枚目だったらsecondCardに代入
            secondCard = div;
            //2枚目のカードの数字が同じだったら
            if (firstCard.num === secondCard.num) {
                //正解だった場合fadeoutクラスを不与
                firstCard.classList.add('fadeout');
                secondCard.classList.add('fadeout');
                [firstCard, secondCard] = [null, null];
            } else {
                //不正解だった場合１．２秒後に裏面に戻す
                setTimeout(() => {
                    firstCard.classList.add('back');
                    secondCard.classList.add('back');
                    [firstCard, secondCard] = [null, null];
                }, 1200);
            }
        }
    };

    //カードgridのDOM取得
    const cardgrid = document.getElementById('cardgrid');
    //gridを初期化する処理f
    const initgrid = () => {
        cardgrid.textContent = null;
        for (let i = 0; i < suits.length; i++) {
            for (let j = 0; j < 13; j++) {
                //一枚ごとのトランプとなるdiv要素
                let div = document.createElement('div');
                //配列からカードを取り出す
                let card = cards[i * 13 + j];
                //divの<div></div>にtextContentを設定
                //tectContentは不要なのでコメント化
                //div.textContent = card.suit + ':' + card.num;

                //背景画像を設定
                div.style.backgroundImage = `url(img/images/${card.front})`;

                //divにcardクラスとbackクラス追加
                div.classList.add('card', 'back');
                   //要素をクリックした際の挙動を登録
                   div.onclick = flip;
                
                //divにnumプロパティを定義して、そこに数字を保存
                div.num = card.num;
             
                //cardgrid要素に追加
                cardgrid.append(div);
            }
        }
    };
    //カードシャッフル関数（Fisher-Yates shuffle）
    const shuffle = () => {
        let i = cards.length;
        while (i) {
            let index = Math.floor(Math.random() * i--);
            [cards[index], cards[i]] = [cards[i], cards[index]]
        }
    };

    //ボタンのDOM取得
    const startBt = document.getElementById('startBt');
    //ボタンを推したときの処理
    startBt.addEventListener('click', () => {
        shuffle();
        initgrid();
        //ゲーム開始時にfirstCard,secondCardをnullにする
        [firstCard, secondCard] = [null, null];
    });
});
