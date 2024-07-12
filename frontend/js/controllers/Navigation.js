export default class Navigation{
    constructor(){
        this._$btnsOpen = document.querySelectorAll('.navigationOpen')
        this._$btnsClose = document.querySelectorAll('.navigationClose')
        this._$main = document.querySelector('main')

        this._$overlay = document.createElement('div')
        this._$overlay.className = 'overlay'
        this._$main.insertAdjacentElement('beforeend', this._$overlay)

    }

    onOverlay(){
        this._$overlay.addEventListener('pointerdown', e =>{
            this._$main.dataset.state = ''
            document.body.classList.remove('ovh')
        })
    }

    onOpen(){
        this._onEvent(this._$btnsOpen, this._open)
    }

    onClose(){
        this._onEvent(this._$btnsClose, this._close)
    }

    _open(e){
        this._$main.dataset.state = e.currentTarget.dataset.mainState
        document.body.classList.add('ovh')
    }

    _close(){
        this._$main.dataset.state = ''
        document.body.classList.remove('ovh')
    }

    _onEvent($group, eventMethod){
        for(let $btn of $group){
            $btn.addEventListener('pointerdown', eventMethod.bind(this))
        }
    }
}
