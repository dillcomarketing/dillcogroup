module.exports = {
    purge: {
        content: ["./source/**/*.blade.php", "./assets/**/*.js"],
        options: {
            whitelist: [
                "border-orange-500",
                "border-flavorich",
                "border-dilltea",
                "hover:border-orange-500",
                "hover:border-flavorich",
                "hover:border-dilltea",
            ],
        },
    },
    darkMode: false,
    theme: {
        screens: {
            xs: "480px",
            sm: "576px",
            md: "768px",
            lg: "992px",
            xl: "1200px",
            "xl-720": "1280px",
            "xl-768": "1366px",
        },
        fontFamily: {
            sans: ["Montserrat", "sans-serif"],
        },
        opacity: {
            0: "0",
            10: ".1",
            20: ".2",
            30: ".3",
            40: ".4",
            50: ".5",
            60: ".6",
            70: ".7",
            80: ".8",
            90: ".9",
            100: "1",
        },
        extend: {
            colors: {
                flavorich: "#16124b",
                dilltea: "#c9ae3f",
                appdark: "#393939",
                flavorich100: "#293075",
            },
            spacing: {
                56: "14rem",
                72: "18rem",
                84: "21rem",
                96: "24rem",
            },
            maxHeight: {
                24: "6rem",
            },
            inset: {
                5: "5%",
                10: "10%",
                15: "15%",
                20: "20%",
                25: "25%",
                30: "30%",
                35: "35%",
                40: "40%",
                45: "45%",
                50: "50%",
                55: "55%",
                60: "60%",
                65: "65%",
                70: "70%",
                75: "75%",
                80: "80%",
                85: "85%",
                90: "90%",
                95: "95%",
                100: "100%",
            },
            fontSize: {
                "7xl": "5rem",
                "8xl": "6rem",
                "9xl": "7rem",
                "10xl": "8rem",
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
