# Install Core UI : 
    npm i @coreui
    npm i @coreui/icons
# webpack.mix.js: 
    mix.copy('node_modules/@coreui/coreui/dist/js/coreui.bundle.min.js', 'public/js');
    mix.copy('node_modules/@coreui/icons/fonts', 'public/fonts');
    mix.copy('node_modules/@coreui/icons/css/free.min.css', 'public/css');
    mix.copy('node_modules/@coreui/icons/css/brand.min.css', 'public/css');
    mix.copy('node_modules/@coreui/icons/css/flag.min.css', 'public/css');
# app.sccc
    @import "~@coreui/coreui/scss/coreui";
