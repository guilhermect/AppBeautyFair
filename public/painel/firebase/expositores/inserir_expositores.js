

        window.addEventListener('load', (e) => {
            e.preventDefault();
            db.collection('news').doc('hair').collection('items').add({
                title: form.title.value,
                content: form.content.value,
                image: img,
                date: form.data.value
            })
            
        })






