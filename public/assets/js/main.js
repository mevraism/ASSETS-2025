const sr = ScrollReveal({
    origin: 'top',
    distance: '80px',
    duration: 2000,
    reset: true
})


/*SCROLL HOME*/
sr.reveal('.awalan', {})
sr.reveal('.kotak', { delay: 200 })
sr.reveal('.img-reveal', { origin: 'right', delay: 400 })

sr.reveal('.judul', {delay: 100})
sr.reveal('.subjudul', {delay: 200})
sr.reveal('.konten', {delay: 200})

sr.reveal('.visi', {delay: 200})
sr.reveal('.misi', {delay: 400})

sr.reveal('.lokasi', {})
sr.reveal('.footer', {})