export default class Lettrine{
    make(){
        if(document.getElementById('detail')){
            let $firstParagraph = document.querySelector('#detail .beta article .content p'),
                contentFirstParagraph = $firstParagraph.textContent,
                firstLetter = contentFirstParagraph[0],
                tpl = `<span class="lettrine">${firstLetter}</span>`,
                output = `${tpl}${contentFirstParagraph.substring(1)}`
            $firstParagraph.innerHTML = output
        }
    }
}
