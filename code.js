async function typeText(element, text, delay) {
    return new Promise(resolve => {
        element.innerHTML = "";
        let index = 0;
        const interval = setInterval(() => {
            element.innerHTML += text[index];
            index++;
            if (index === text.length) {
                clearInterval(interval);
                resolve();
            }
        }, delay);
    });
}

async function showContent(contentId) {
    const contents = document.querySelectorAll('.content');
    contents.forEach(content => content.classList.remove('active'));

    const selectedContent = document.getElementById(contentId);
    selectedContent.classList.add('active');

    const paragraphs = selectedContent.querySelectorAll('p');
    for (const p of paragraphs) {
        await typeText(p, p.innerText, 50);
    }

    const buttons = selectedContent.querySelectorAll('.button');
    buttons.forEach(button => button.style.opacity = '1');

    setTimeout(() => {
        window.scrollTo({
            top: document.body.scrollHeight,
            behavior: 'smooth'
        });
    }, 100);
}