import axios from "axios";

export async function getWalls(id) {
    return await axios.get(route('wall.index', [id]));
}

export async function postWall(data) {
    return await axios.post(route('wall.store'), data);
}
