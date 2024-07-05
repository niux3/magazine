import '../scss/index.scss';
import * as Controllers from './controllers'


window.addEventListener('DOMContentLoaded', e =>{
    for(let [name, cls] of Object.entries(Controllers)){
        let instance = new Controllers[name]()
        for(let method of Object.getOwnPropertyNames(cls.prototype)){
            if(!['_', '#'].every(sign => method.startsWith(sign)) && method !== 'constructor'){
                instance[method]()
            }
        }
    }
});
