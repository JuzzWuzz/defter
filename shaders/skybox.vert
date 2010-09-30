#version 150 core

uniform mat4 mvpMatrix;

in vec3 in_Position;
in vec2 in_TexCoord;

out vec2 frag_TexCoord;
out vec3 frag_pos;

const vec3 scale = vec3(1000.0f, 1000.0f, 1000.0f);

void main(){
	gl_Position 	= mvpMatrix * vec4(scale * in_Position, 1.0f);
	frag_pos 		= in_Position.xyz * scale;
	frag_TexCoord	= in_TexCoord;
}