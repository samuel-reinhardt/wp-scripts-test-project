import brand from 'brand' // importing data brand/index.json
import header from 'header' // importing the default export from header/index.js, which in turn includes a header/index.scss

console.log( brand.colors.primary )
header() // the default export of header was a function, so we'll call it
