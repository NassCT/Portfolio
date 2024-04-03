function openContactDialog() {
	const overlay = document.getElementById("overlay");
	overlay.style.display = "flex";
	setTimeout(() => {
		overlay.classList.add("visible");
	}, 10);

	const closeButtonContact = document.getElementById("close-button");
	closeButtonContact.addEventListener("click", closeOverlay);

	document.addEventListener("keydown", function (event) {
		if (event.key === "Escape") {
			closeOverlay();
		}
	});
}

function closeOverlay() {
	const overlay = document.getElementById("overlay");
	overlay.classList.remove("visible");
	setTimeout(() => {
		overlay.style.display = "none";
	}, 300);
}

const projects = document.querySelector(".projects");
const moreInfoButtons = document.querySelectorAll(".info button");
const closeButtons = document.querySelectorAll(
	".projectscontent a, .projectscontent button",
);

moreInfoButtons.forEach((button) => {
	button.addEventListener("click", function () {
		const projectId = this.dataset.projectId;
		const projectWrapper = document.querySelector(`#${projectId}`);
		if (projectWrapper) {
			openProject(projectWrapper);
		}
	});
});

closeButtons.forEach((button) => {
	button.addEventListener("click", closeProject);
});

document.addEventListener("keydown", function (event) {
	if (event.key === "Escape") {
		closeProject();
	}
});

function openProject(projectWrapper) {
	projects.style.display = "flex";
	projects.classList.add("visible");
	setTimeout(() => {
		projectWrapper.classList.add("visible");
	}, 10);
}

function closeProject() {
	projects.classList.remove("visible");
	const projectWrappers = document.querySelectorAll(".project-wrapper");
	projectWrappers.forEach((wrapper) => {
		wrapper.classList.remove("visible");
	});
	setTimeout(() => {
		projects.style.display = "none";
	}, 300);
}

$(function () {
	window.sr = ScrollReveal();

	if ($(window).width() < 768) {
		if ($(".timeline-content").hasClass("js--fadeInLeft")) {
			$(".timeline-content")
				.removeClass("js--fadeInLeft")
				.addClass("js--fadeInRight");
		}

		sr.reveal(".js--fadeInRight", {
			origin: "right",
			distance: "300px",
			easing: "ease-in-out",
			duration: 800,
		});
	} else {
		sr.reveal(".js--fadeInLeft", {
			origin: "left",
			distance: "300px",
			easing: "ease-in-out",
			duration: 800,
		});

		sr.reveal(".js--fadeInRight", {
			origin: "right",
			distance: "300px",
			easing: "ease-in-out",
			duration: 800,
		});
	}

	sr.reveal(".js--fadeInLeft", {
		origin: "left",
		distance: "300px",
		easing: "ease-in-out",
		duration: 800,
	});

	sr.reveal(".js--fadeInRight", {
		origin: "right",
		distance: "300px",
		easing: "ease-in-out",
		duration: 800,
	});
});

function sendEmail() {
	const userName = document.getElementById("user_name").value;
	const userEmail = document.getElementById("user_email").value;
	const message = document.getElementById("message").value;

	fetch("../../send_email.php", {
		method: "POST",
		headers: {
			"Content-Type": "application/json",
		},
		body: JSON.stringify({
			user_name: userName,
			user_email: userEmail,
			message: message,
		}),
	})
		.then((response) => {
			if (!response.ok) {
				throw new Error("Failed to send email");
			}
			return response.json();
		})
		.then((data) => {
			console.log("Email sent successfully:", data);
			alert("Your message has been sent. Thank you!");
		})
		.catch((error) => {
			console.error("Error sending email:", error);
			alert("An error occurred while sending the message.");
		});
}
