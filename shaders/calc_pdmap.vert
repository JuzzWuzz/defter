/*
/ Copyright � 2010
/ Andrew Flower & Justin Crause
/ Honours Project - Deformable Terrain
*/

#version 150 core

// Uniforms
uniform vec2 stamp_scale;
uniform vec2 clickPos;


// Shader Input
in vec2 vert_Position;
in vec2 vert_TexCoord;


// Shader Output
out vec2 frag_TexCoord;


//------------------------------------------------------------------------------
void main()
{
	vec2 dif 		= 0.5 - clickPos;

	vec2 texCoord 	= vert_TexCoord * stamp_scale;

	gl_Position 	= vec4(2 * (texCoord - dif), 1.0, 1.0);
	frag_TexCoord 	= texCoord  + clickPos;
}
