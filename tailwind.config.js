module.exports = {
    purge: [
        './source/**/*.blade.php',
        './assets/**/*.js'
    ],
    darkMode: false,
    theme: {
        screens: {
            'xs': '480px',
            'sm': '576px',
            'md': '768px',
            'lg': '992px',
            'xl': '1200px',
            'xlscreen': '1280px',
        },
        fontFamily: {
            'sans': ['Montserrat', 'sans-serif'],
        },
        opacity: {
            '0': '0',
            '10': '.1',
            '20': '.2',
            '30': '.3',
            '40': '.4',
            '50': '.5',
            '60': '.6',
            '70': '.7',
            '80': '.8',
            '90': '.9',
            '100': '1',
        },
        extend: {
            colors: {
                'primary': '#5271ff',
                'secondary': '#657389',
                'warning': '#ffda81',
                'error': '#eb6b6b',
                'info': '#329f99',
                'light': '#f5f6f8',
                'dark': '#3a424e'
            },
            spacing: {
                '56': '14rem',
                '72': '18rem',
                '84': '21rem',
                '96': '24rem',
            },
            maxHeight: {
                '24': '6rem'
            },
            inset: {
                '5': '5%',
                '10': '10%',
                '15': '15%',
                '20': '20%',
                '25': '25%',
                '30': '30%',
                '35': '35%',
                '40': '40%',
                '45': '45%',
                '50': '50%',
                '55': '55%',
                '60': '60%',
                '65': '65%',
                '70': '70%',
                '75': '75%',
                '80': '80%',
                '85': '85%',
                '90': '90%',
                '95': '95%',
                '100': '100%',
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
