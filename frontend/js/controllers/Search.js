export default class Search{
    constructor(){
        this._$btnSearch = document.getElementById('btnSearch')
        this._$main = document.querySelector('main')
    }

    onOpenSearch(){
        this._$btnSearch.addEventListener('pointerdown', e =>{
            this._$main.dataset.state = 'onSearch'
        })
    }
}
