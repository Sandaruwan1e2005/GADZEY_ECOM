/** @type {import('tailwindcss').Config} */
export default {
	content: [
		"./resources/**/*.blade.php",
		"./resources/**/*.js",
		"./resources/**/*.vue",
		'node_modules/preline/dist/*.js',
		'./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
	],
	darkMode: 'class',
theme: {
	extend: {
		animation: {
			'spin-slow': 'spin 8s linear infinite',
			'pulse-slow': 'pulse 3s infinite',
		},
	},
},
plugins: [
	require('preline/plugin'),
],

	
}

