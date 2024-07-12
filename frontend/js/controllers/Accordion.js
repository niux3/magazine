export default class Accordion{
    execute(){
        for(let $items of document.querySelectorAll('.accordion')){
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
