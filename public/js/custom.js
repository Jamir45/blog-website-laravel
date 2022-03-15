const selectedId = (value) => {
    return document.getElementById(value);
};

// route change
function navigate(value) {
    window.location.href = value;
}

async function postSubmit() {
    const title = selectedId("postTitle").value;
    const body = selectedId("postBody").value;
    const message = selectedId("error");

    const result = await axios.post("/insert/post", { title, body });
    if (result.data.success) {
        message.innerHTML = `<p class="text-primary">${result.data.success}</p>`;
        setTimeout(() => {
            navigate("/");
        }, 1000);
    } else {
        message.innerHTML = `<p class="text-error">${result.data.success}</p>`;
    }
}

async function postDelete(id) {
    const postId = parseInt(id);
    console.log(postId);

    const result = await axios.delete(`/delete/post/${postId}`);
    console.log(result);
    // if (result.data.success) {
    //     message.innerHTML = `<p class="text-primary">${result.data.success}</p>`;
    //     setTimeout(() => {
    //         navigate("/");
    //     }, 1000);
    // } else {
    //     message.innerHTML = `<p class="text-error">${result.data.success}</p>`;
    // }
}
