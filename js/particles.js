document.addEventListener("DOMContentLoaded", function () {

    if (typeof particlesJS === "undefined") {
        return;
    }

    var particleSettings = {
        particles: {
            number: {
                value: 150,
                density: {
                    enable: true,
                    value_area: 900
                }
            },

            color: {
                value: "#ffcb00"
            },

            shape: {
                type: "circle"
            },

            opacity: {
                value: 0.55,
                random: true,
                anim: {
                    enable: false
                }
            },

            size: {
                value: 3.5,
                random: true
            },

            line_linked: {
                enable: true,
                distance: 140,
                color: "#ffcb00",
                opacity: 0.35,
                width: 1
            },

            move: {
                enable: true,
                speed: 1.6,
                direction: "none",
                random: false,
                straight: false,
                out_mode: "out",
                bounce: false
            }
        },

        interactivity: {
            detect_on: "canvas",

            events: {
                onhover: {
                    enable: true,
                    mode: "grab"
                },

                onclick: {
                    enable: true,
                    mode: "push"
                },

                resize: true
            },

            modes: {
                grab: {
                    distance: 180,
                    line_linked: {
                        opacity: 0.8
                    }
                },

                push: {
                    particles_nb: 3
                }
            }
        },

        retina_detect: true
    };


    /* Existing Header Particles */
    var headerParticles = document.getElementById("particles-js");

    if (headerParticles) {
        particlesJS("particles-js", particleSettings);
    }


    /* Particles for .add-particles sections */
    document.querySelectorAll(".add-particles").forEach(function (section, index) {

        /* Don't create another particle container for header */
        if (section.querySelector("#particles-js")) {
            return;
        }

        var particlesContainer = document.createElement("div");

        particlesContainer.id = "particles-section-" + index;
        particlesContainer.className = "particles-container";

        /* IMPORTANT: Give container an actual height */
        particlesContainer.style.position = "absolute";
        particlesContainer.style.top = "0";
        particlesContainer.style.left = "0";
        particlesContainer.style.width = "100%";
        particlesContainer.style.height = section.offsetHeight + "px";
        particlesContainer.style.zIndex = "0";
        particlesContainer.style.pointerEvents = "none";

        section.insertBefore(particlesContainer, section.firstChild);

        particlesJS(particlesContainer.id, particleSettings);

    });

});