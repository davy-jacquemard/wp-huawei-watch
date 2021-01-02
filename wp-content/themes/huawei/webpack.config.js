
const path = require( 'path' );
const MiniCssExtractPlugin = require( 'mini-css-extract-plugin' );
const OptimizeCssAssetsPlugin = require( 'optimize-css-assets-webpack-plugin' );
const cssnano = require( 'cssnano' ); // https://cssnano.co/
const { CleanWebpackPlugin } = require( 'clean-webpack-plugin' );
const UglifyJsPlugin = require( 'uglifyjs-webpack-plugin' );

const JS_DIR = path.resolve( __dirname, 'static/scripts' );
const STYLES_DIR = path.resolve( __dirname, 'static/styles' );
const IMG_DIR = path.resolve( __dirname, 'static/img' );
const BUILD_DIR = path.resolve( __dirname, 'build' );
const entry = {
	global: [
		JS_DIR + '/global.js',
		STYLES_DIR + '/global.scss',
	],
	product: STYLES_DIR + '/pages/product/product.scss',

};
const output = {
	publicPath: '',
	path: BUILD_DIR,
	filename: 'scripts/[name].js'
};


const plugins = ( argv ) => [
	new CleanWebpackPlugin( {
		cleanStaleWebpackAssets: ( argv.mode === 'production' ) 
	} ),
	new MiniCssExtractPlugin( {
		filename: 'styles/[name].css'
	} ),

];
const rules = [
	{
		test: /\.js$/,
		include: [ JS_DIR ],
		exclude: /node_modules/,
		use: 'babel-loader'
	},
	{
		test: /\.scss$/,
		use: [
			MiniCssExtractPlugin.loader,
			{
				// CSS to CommonJS (resolves CSS imports into exported CSS strings)
				loader: 'css-loader',
				options: {
					sourceMap: true,
					//importLoaders: 2
					url: false,
					// import: false
				}
			},
			{
				loader: 'postcss-loader',
				options: {
					sourceMap: true
				}
			},
			// {
			// 	loader: 'resolve-url-loader',
			// 	options: {
			// 		//attempts: 1,
			// 		sourceMap: true
			// 	}
			// },
			{
				// compiles Sass to CSS
				loader: 'sass-loader',
				options: { sourceMap: true, }
			}
		],
	},

	{
		test: /\.(png|jpg|svg|jpeg|gif|ico)$/,
		use: {
			loader: 'file-loader',
			options: {
				name: '[path][name].[ext]',
				publicPath: 'production' === process.env.NODE_ENV ? '../' : '../../'
			}
		}
	},

];


module.exports = ( env, argv ) => ({
	entry: entry,
	output: output,
	devtool: 'source-map',
	module: {
		rules: rules,
	},
	optimization: {
		minimizer: [
			new OptimizeCssAssetsPlugin( {
				cssProcessor: cssnano
			} ),
			new UglifyJsPlugin( {
				cache: false,
				parallel: true,
				sourceMap: false
			} )
		]
	},
	plugins: plugins( argv ),
	/* externals: {
		jquery: 'jQuery'
	} */
});