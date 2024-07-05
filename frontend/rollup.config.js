import babel from 'rollup-plugin-babel';
import resolve from 'rollup-plugin-node-resolve';
import scss from 'rollup-plugin-scss';
import { terser } from "rollup-plugin-terser";
import commonjs from 'rollup-plugin-commonjs';
import livereload from 'rollup-plugin-livereload';


let plugins = [
    resolve(),
    commonjs({
        include: 'node_modules/**',
    }),
    babel({
        exclude: 'node_modules/**',
    }),
    terser(),
    scss({
        output:'../apps/core/static/css/styles.css',
        failOnError: true,
        watch: 'scss/',
        outputStyle: "compressed",
    })
];
if(process.argv.includes('--dev')){
    plugins = [...plugins, livereload({
        watch: 'public',
        verbose: true,
        port: 9000,
        delay: 500,
    })]
}
export default {
    input: 'js/index.js',
    output: {
        format: 'iife',
        file: '../apps/core/static/js/app.js',
        name: 'app'
    },
    plugins:plugins
};
