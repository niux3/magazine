export default class Search{
    constructor(){
        this._$btnSearch = document.getElementById('btnSearch')
        this._$btnCloseSearch = document.getElementById('btnCloseSearch')
        this._$main = document.querySelector('main')
    }

    onOpenSearch(){
        this._$btnSearch.addEventListener('pointerdown', e =>{
            this._$main.dataset.state = 'onSearch'
            document.body.classList.add('ovh')
        })
    }

    onCloseSearch(){
        this._$btnCloseSearch.addEventListener('pointerdown', e =>{
            this._$main.dataset.state = ''
            document.body.classList.remove('ovh')
        })
    }
}
