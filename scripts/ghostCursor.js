function ghostCursor(options) {
    let hasWrapperEl = options && options.element
    let element = hasWrapperEl || document.body

    let width = window.innerWidth
    let height = window.innerHeight
    let cursor = { x: width / 2, y: width / 2 }
    let particles = []
    let canvas, context

    let baseImage = new Image()
    baseImage.src =
        "data:image/png;base64,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"

    function init() {
        canvas = document.createElement("canvas")
        context = canvas.getContext("2d")
        canvas.style.top = "0px"
        canvas.style.left = "0px"
        canvas.style.pointerEvents = "none"

        if (hasWrapperEl) {
            canvas.style.position = "absolute"
            element.appendChild(canvas)
            canvas.width = element.clientWidth
            canvas.height = element.clientHeight
        } else {
            canvas.style.position = "fixed"
            document.body.appendChild(canvas)
            canvas.width = width
            canvas.height = height
        }

        bindEvents()
        loop()
    }

    // Bind events that are needed
    function bindEvents() {
        element.addEventListener("mousemove", onMouseMove)
        element.addEventListener("touchmove", onTouchMove, { passive: true })
        element.addEventListener("touchstart", onTouchMove, { passive: true })
        window.addEventListener("resize", onWindowResize)
    }

    function onWindowResize(e) {
        width = window.innerWidth
        height = window.innerHeight

        if (hasWrapperEl) {
            canvas.width = element.clientWidth
            canvas.height = element.clientHeight
        } else {
            canvas.width = width
            canvas.height = height
        }
    }

    function onTouchMove(e) {
        if (e.touches.length > 0) {
            for (let i = 0; i < e.touches.length; i++) {
                addParticle(e.touches[i].clientX, e.touches[i].clientY, baseImage)
            }
        }
    }

    function onMouseMove(e) {
        if (hasWrapperEl) {
            const boundingRect = element.getBoundingClientRect()
            cursor.x = e.clientX - boundingRect.left
            cursor.y = e.clientY - boundingRect.top
        } else {
            cursor.x = e.clientX
            cursor.y = e.clientY
        }

        addParticle(cursor.x, cursor.y, baseImage)
    }

    function addParticle(x, y, image) {
        particles.push(new Particle(x, y, image))
    }

    function updateParticles() {
        context.clearRect(0, 0, width, height)

        // Update
        for (let i = 0; i < particles.length; i++) {
            particles[i].update(context)
        }

        // Remove dead particles
        for (let i = particles.length - 1; i >= 0; i--) {
            if (particles[i].lifeSpan < 0) {
                particles.splice(i, 1)
            }
        }
    }

    function loop() {
        updateParticles()
        requestAnimationFrame(loop)
    }

    /**
     * Particles
     */

    function Particle(x, y, image) {
        const lifeSpan = 15
        this.initialLifeSpan = lifeSpan //ms
        this.lifeSpan = lifeSpan //ms
        this.position = { x: x, y: y }

        this.image = image

        this.update = function (context) {
            this.lifeSpan--
            const opacity = Math.max(this.lifeSpan / this.initialLifeSpan, 0)

            context.globalAlpha = opacity
            context.drawImage(
                this.image,
                this.position.x, // - (this.canv.width / 2) * scale,
                this.position.y //- this.canv.height / 2,
            )
        }
    }

    init()
}