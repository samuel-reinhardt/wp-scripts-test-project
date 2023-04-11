import default_config from '@wordpress/scripts/config/webpack.config.js'
import path from 'node:path'

const __dirname = path.dirname('')

const entries = {
	theme: 'theme',
	editor: 'editor'
}

export default {
	...default_config,
	context: path.resolve( __dirname, 'themes/test-theme'),
	entry: { // these will look for the related modules in our source directory, and compile them into our build directory
		theme: 'theme', // this will look for theme.js, theme/index.js, etc
		editor: 'editor'
	},
	resolve: {
		modules: [ path.resolve(__dirname, 'themes/test-theme/source'), path.resolve(__dirname, 'node_modules') ] // when we reference modules, use our theme source directory, and node_modules
	}
}
