//scroll for taskit

const html = document.documentElement;
const canvas = document.getElementById("hydantoin");
const context = canvas.getContext("2d");

const frameCount = 100;
const currentFrame1 = index => (
  `http://www.srikantv.com/assets/HydantoinFrames/hydantoinFrames${index.toString().padStart(3, '0')}.jpg`
)

const preloadImages = () => {
  for (let i = 1; i < frameCount; i++) {
    const img = new Image();
    img.src = currentFrame(i);
  }
};

const img = new Image()
img.src = currentFrame1(1);
canvas.width=1500;
canvas.height=1154;
img.onload=function(){
  context.drawImage(img, 0, 0);
}

const updateImage1 = index => {
  img.src = currentFrame(index);
  context.drawImage(img, 0, 0);
}

window.addEventListener('scroll', () => {  
  const scrollTop = html.scrollTop;
  const maxScrollTop = html.scrollHeight - window.innerHeight;
  const scrollFraction = scrollTop / maxScrollTop;
  const frameIndex = Math.min(
    frameCount - 1,
    Math.ceil(scrollFraction * frameCount)
  );
  console.log(scrollFraction);
  requestAnimationFrame(() => updateImage1(frameIndex + 1))
});

preloadImages();


//scroll for hydantoin

const html = document.documentElement;
const canvas = document.getElementById("hydantoin");
const context = canvas.getContext("2d");

const frameCount = 100;
const currentFrame1 = index => (
  `http://www.srikantv.com/assets/HydantoinFrames/hydantoinFrames${index.toString().padStart(3, '0')}.jpg`
)

const preloadImages = () => {
  for (let i = 1; i < frameCount; i++) {
    const img = new Image();
    img.src = currentFrame(i);
  }
};

const img = new Image()
img.src = currentFrame1(1);
canvas.width=1500;
canvas.height=1154;
img.onload=function(){
  context.drawImage(img, 0, 0);
}

const updateImage1 = index => {
  img.src = currentFrame(index);
  context.drawImage(img, 0, 0);
}

window.addEventListener('scroll', () => {  
  const scrollTop = html.scrollTop;
  const maxScrollTop = html.scrollHeight - window.innerHeight;
  const scrollFraction = scrollTop / maxScrollTop;
  const frameIndex = Math.min(
    frameCount - 1,
    Math.ceil(scrollFraction * frameCount)
  );
  console.log(scrollFraction);
  requestAnimationFrame(() => updateImage1(frameIndex + 1))
});

preloadImages();
