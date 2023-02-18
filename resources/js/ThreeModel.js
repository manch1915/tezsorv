import * as THREE from 'three'
import { GLTFLoader } from 'three/addons/loaders/GLTFLoader.js';

function renderModel(){
    const scene = new THREE.Scene()
    const camera =new THREE.PerspectiveCamera(75, 4 / 4, 0.01,1000)
    const renderer = new THREE.WebGLRenderer({
        canvas: document.querySelector('#bg'),
        alpha: true
    });
    renderer.setPixelRatio(16/9)
    renderer.setSize( window.innerWidth /2,window.innerHeight / 1.3);
    camera.position.set(0,0,2)

    const loader = new GLTFLoader();
    let obj
    loader.load( './book/scene.gltf', function ( gltf ) {
        obj = gltf.scene
        scene.add( gltf.scene );
    }, undefined, function ( error ) {
        console.error( error );
    } );

    renderer.setClearColor( 0x000000, 0 ); // the default
    const light = new THREE.DirectionalLight(0xFFFFFF,1)
    scene.add(light)
    light.position.set(10,11,1000)

    function animate(time) {
        if (obj){
            let rotationSpeed = 0.005;

            obj.rotation.x = 23.6
            obj.rotation.y = 0
            obj.rotation.z += rotationSpeed;
        }
        renderer.render(scene,camera)
    }
    renderer.setAnimationLoop(animate)


}
export {renderModel}
