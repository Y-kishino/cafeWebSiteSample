(()=>{
    const $doc = document;
    const $tab = $doc.getElementById('jsTab');
    const $nav = $tab.querySelectorAll('[data-nav]');
    const $contentArea = $doc.getElementById('jsContentsArea');
    console.log($contentArea);
    const $content = $contentArea.querySelectorAll('[data-content]');
    console.log( $content)

    //初期化
    const init = function(){
        $content[0].style.display = 'block'
    };
    init();
    //クリックイベント
    const handleClick = (e) =>{
        e.preventDefault();
        //data-navのクリックイベントを取得
        const $this = e.target;
        const targetValue = $this.dataset.nav;
        console.log(targetValue);
        //不要なnav,content全て一旦リセットする。
        let index = 0;
        while(index < $nav.length){
            $content[index].style.display = 'none';
            index++;
        }

        // 対象のコンテンツを表示
        $tab.querySelectorAll('[data-content="'+targetValue+'"]')[0].style.display='block';
        $nav[targetValue].classList.add('isActive');
    }
    let index=0;
    while(index<$nav.length){
    $nav[index].addEventListener('click',(e) => handleClick(e));
    index++;
    }
    
})();
$(".pagenameArea").animate({"width":"100%"},(40),function(){
    $(".TabTargetArea").animate({"width":"0%"},(500),function(){
    $(".TabTargetArea").animate({"width":"100%"},(500),function(){
        $(".tabul").addClass('tabulFadeIn');
        $(".contentsArea").addClass('contentsAreaFadein');
        
        });
    });
});