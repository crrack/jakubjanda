document.addEventListener('alpine:init', () => {
    Alpine.data('root', () => ({
        menu_open: false,
        loading: true,
        path: window.location.pathname,
        link(page) {
            this.loading = true;
            this.$nextTick(() => { 
                var char = '?';
                if(page.includes('?')) char = '&';

                

                var url = page;
                if(!page.includes('http')) {
                    if(url.substring(0, 1) != '/') url = '/' + url;
                    url = global_url + url;
                }

                window.history.pushState(page, document.title, url);

                url = url + char + 'fetch=true';

                fetch(url)
                .then((response) => {
                    if (!response.ok) {
                        console.log(response.status);
                    }
                    return response.text();
                }).then((html) => {
                    this.path = page;
                    document.getElementById('html_view').innerHTML = html;
                    this.$nextTick(() => { 
                        this.loading = false;
                        this.menu_open = false;
                        document.body.scrollTop = 0; // For Safari
                        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
                    });
                });
            });
        },
        init() {
            this.loading = false;
            window.onpopstate = () => {
                location.reload();
            };
            window.addEventListener('link', (event) => {
                this.link(event.detail);
            });
        }
    }));
    Alpine.directive('link', (el, { expression }, { evaluate }) => {
        var att = document.createAttribute("href");
        att.value = expression;
        el.setAttributeNode(att);
        
        el.addEventListener('click', (e) => {
            e.preventDefault();
            let customEvent = new CustomEvent('link', {
                detail: expression
            });
            window.dispatchEvent(customEvent);
        });
    })
})