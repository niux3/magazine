export default class Accordion{
    constructor(){
        this._$accordions = document.querySelectorAll('.accordion')
    }

    onEvent(){
        for(let $items of this._$accordions){
            for(let $el of $items.querySelectorAll('.accordionItem')){
                $el.querySelector('button').addEventListener('pointerdown', e =>{
                    if($el.classList.contains('show')){
                        $el.classList.remove('show')
                    }else{
                        $items.querySelectorAll('.accordionItem').forEach($item => $item.classList.remove('show'))
                        $el.classList.add('show')
                    }
                })
            }
        }
    }
}
