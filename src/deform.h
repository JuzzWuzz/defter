
#ifndef _DEFORM_H_
#define _DEFORM_H_

typedef struct{
	float u,v;
} float2;


class Deform{
public:
	Deform					(int coarseDim, int highDim, float metre_to_tex);
	~Deform();

	void displace_heightmap	(TexData texdata, vector2 clickPos, float scale, bool isCoarse);
	void create_normalmap	(TexData texdata, bool isCoarse);

	bool			m_no_error;

private:
	void calculate_normals	(TexData texdata, vector2 tex_coord, vector2 scale, bool isCoarse);
	
	ShaderProg*		m_shDeform;
	ShaderProg*		m_shNormal;

	// FBOs
	GLuint			m_fbo_heightmap;

	// VAOs & VBOs
	GLuint			m_vao;
	GLuint			m_vbo;

	int				m_coarseDim;
	int				m_highDim;
	float			m_metre_to_tex;
	GLuint			m_coarseBackup;
	bool			m_initialised;
};


#endif
