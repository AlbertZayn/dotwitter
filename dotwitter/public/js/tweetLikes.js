document.addEventListener("DOMContentLoaded", function () {
    const likeButtons = document.querySelectorAll(".tweet-likes-btn");
    likeButtons.forEach((button) => {
        button.addEventListener("click", function () {
            let tweetId = this.getAttribute("data-tweet-id");
            let tweetUserId = this.getAttribute("data-tweet-userId");
            let likeCount = this.querySelector(".tweet-likes-number");
            let likedSVG = this.querySelector(".tweet-likes-svg");

            fetch("/like-tweet", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({ tweetId, tweetUserId }),
            })
                .then((response) => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! Status: ${response.status}`);
                    }
                    return response.json();
                })
                .then((data) => {
                    console.log("Response data:", data);
                    if (data.success) {
                        if (data.isLiked) {
                            button.classList.add('liked');
                            likedSVG.setAttribute("fill", "currentColor");
                            likedSVG.setAttribute("class", "bi bi-heart");
                            likedSVG.querySelector("path").setAttribute("fill-rule", "evenodd");
                            likedSVG.querySelector("path").setAttribute("d", "m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z");
                            likeCount.style.color = "black";
                        } else {
                            button.classList.remove('liked');
                            likedSVG.setAttribute("fill", "rgb(249, 24, 128)");
                            likedSVG.setAttribute("class", "bi bi-heart-fill");
                            likedSVG.querySelector("path").setAttribute("fill-rule", "evenodd");
                            likedSVG.querySelector("path").setAttribute("d", "M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z");
                            likeCount.style.color = "rgb(249, 24, 128)";
                        }
                        if (data.likes !== null && typeof data.likes === 'number' && !isNaN(data.likes)) {
                            likeCount.textContent = data.likes;
                        } else {
                            console.error("Invalid like count received from the server.");
                        }
                    } else {
                        console.error("Failed to like/unlike the tweet: " + data.message);
                    }
                })
                .catch((error) => {
                    console.error("Error while liking/unliking the tweet:", error);
                });
        });
    });
});