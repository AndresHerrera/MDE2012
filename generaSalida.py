import arcpy
import arcpy.mapping, os

#en fecha_label debo entrar  string:  0-2009_2_17
fecha_label = arcpy.GetParameterAsText(0)

id_secuencia = fecha_label.split('-', 1)[0]
fecha_secuencia = fecha_label.split('-', 1)[1]

tmp_mnma = 0
tmp_mdia = 0
tmp_mxma = 0	
hmd_rel_mn	= 0
hmd_rel_md	= 0
hmd_rel_mx	= 0
brllo_slar	= 0
rdcion_sla	= 0
etp	= 0
prcptcion = 0
evp_clclad = 0


tmp_mnma2 = 0
tmp_mdia2 = 0
tmp_mxma2 = 0	
hmd_rel_mn2	= 0
hmd_rel_md2	= 0
hmd_rel_mx2	= 0
brllo_slar2	= 0
rdcion_sla2	= 0
etp2	= 0
prcptcion2 = 0
evp_clclad2 = 0
		

mxd = arcpy.mapping.MapDocument("CURRENT")

#apago todos los shp_ 
for lyrs in arcpy.mapping.ListLayers(mxd):
	aa=lyrs.name
	if aa.startswith("shp_"):
		lyrs.visible = False
arcpy.RefreshActiveView()
		
#prendo solo el que me interesa
for lyr in arcpy.mapping.ListLayers(mxd):
    if lyr.name == 'shp_'+fecha_secuencia:
		lyr.visible = True
#arcpy.RefreshActiveView()

elm = arcpy.mapping.ListLayoutElements(mxd, "TEXT_ELEMENT", "fecha_dinamica")[0]
elm.text=" "+ fecha_secuencia.replace("_","/") + " "
#arcpy.RefreshActiveView()

#cfechas tabla que debo consultar
#id_secuencia parametro de where

fc = "c:\cfechas.dbf"
rows = arcpy.SearchCursor(fc)
for row in rows:
	idk= row.getValue("id_f")
	arcpy.AddMessage("\nID:" + str(idk) + " Secuencia:"  + str(id_secuencia)  )
	if int(idk) == int(id_secuencia) :
		tmp_mnma = row.getValue("tmp_mnma")
		tmp_mdia = row.getValue("tmp_mdia")
		tmp_mxma = row.getValue("tmp_mxma")	
		hmd_rel_mn	= row.getValue("hmd_rel_mn")
		hmd_rel_md	= row.getValue("hmd_rel_md")
		hmd_rel_mx	= row.getValue("hmd_rel_mx")
		brllo_slar	= row.getValue("brllo_slar")
		rdcion_sla	= row.getValue("rdcion_sla")
		etp	= row.getValue("etp")
		prcptcion = row.getValue("prcptcion")
		evp_clclad = row.getValue("evp_clclad")
		
		arcpy.AddMessage("\nprec:" + str(prcptcion) )
		
		tprec = arcpy.mapping.ListLayoutElements(mxd, "TEXT_ELEMENT", "t_prec")[0]
		bprec = arcpy.mapping.ListLayoutElements(mxd, "GRAPHIC_ELEMENT", "b_prec")[0]
		tprec.text=" "+ str(round(prcptcion,2)) +  " "	
		bprec.elementHeight=(float(prcptcion)/float(150))

		ttmin = arcpy.mapping.ListLayoutElements(mxd, "TEXT_ELEMENT", "t_tmin")[0]
		btmin = arcpy.mapping.ListLayoutElements(mxd, "GRAPHIC_ELEMENT", "b_tmin")[0]
		ttmin.text=" "+ str(round(tmp_mnma,2)) +  " "	
		btmin.elementHeight=(float(tmp_mnma)/float(150))

		ttmed = arcpy.mapping.ListLayoutElements(mxd, "TEXT_ELEMENT", "t_tmed")[0]
		btmed = arcpy.mapping.ListLayoutElements(mxd, "GRAPHIC_ELEMENT", "b_tmed")[0]
		ttmed.text=" "+ str(round(tmp_mdia,2))+  " "	
		btmed.elementHeight=(float(tmp_mdia)/float(150))

		ttmax = arcpy.mapping.ListLayoutElements(mxd, "TEXT_ELEMENT", "t_tmax")[0]
		btmax = arcpy.mapping.ListLayoutElements(mxd, "GRAPHIC_ELEMENT", "b_tmax")[0]
		ttmax.text=" "+ str(round(tmp_mxma,2)) +  " "	
		btmax.elementHeight=(float(tmp_mxma)/float(150))

		tetp = arcpy.mapping.ListLayoutElements(mxd, "TEXT_ELEMENT", "t_etp")[0]
		betp = arcpy.mapping.ListLayoutElements(mxd, "GRAPHIC_ELEMENT", "b_etp")[0]
		tetp.text=" "+ str(round(etp,2)) +  " "	
		betp.elementHeight=(float(etp)/float(150))

		tevp = arcpy.mapping.ListLayoutElements(mxd, "TEXT_ELEMENT", "t_evp")[0]
		bevp = arcpy.mapping.ListLayoutElements(mxd, "GRAPHIC_ELEMENT", "b_evp")[0]
		tevp.text=" "+ str(round(evp_clclad,2)) +  " "	
		bevp.elementHeight=(float(evp_clclad)/float(150))

		thrmin = arcpy.mapping.ListLayoutElements(mxd, "TEXT_ELEMENT", "t_hrmin")[0]
		bhrmin = arcpy.mapping.ListLayoutElements(mxd, "GRAPHIC_ELEMENT", "b_hrmin")[0]
		thrmin.text=" "+ str(round(hmd_rel_mn,2))  +  " "	
		bhrmin.elementHeight=(float(hmd_rel_mn)/float(150))

		thrmed = arcpy.mapping.ListLayoutElements(mxd, "TEXT_ELEMENT", "t_hrmed")[0]
		bhrmed = arcpy.mapping.ListLayoutElements(mxd, "GRAPHIC_ELEMENT", "b_hrmed")[0]
		thrmed.text=" "+ str(round(hmd_rel_md,2)) +  " "	
		bhrmed.elementHeight=(float(hmd_rel_md)/float(150))

		thrmax = arcpy.mapping.ListLayoutElements(mxd, "TEXT_ELEMENT", "t_hrmax")[0]
		bhrmax = arcpy.mapping.ListLayoutElements(mxd, "GRAPHIC_ELEMENT", "b_hrmax")[0]
		thrmax.text=" "+str(round(hmd_rel_mx,2))  +  " "	
		bhrmax.elementHeight=(float(hmd_rel_mx)/float(150))

		tbrillo = arcpy.mapping.ListLayoutElements(mxd, "TEXT_ELEMENT", "t_brillo")[0]
		bbrillo = arcpy.mapping.ListLayoutElements(mxd, "GRAPHIC_ELEMENT", "b_brillo")[0]
		tbrillo.text=" "+ str(round(brllo_slar,2))  +  " "	
		bbrillo.elementHeight=(float(brllo_slar)/float(150))
		
		trad = arcpy.mapping.ListLayoutElements(mxd, "TEXT_ELEMENT", "t_rad")[0]
		brad = arcpy.mapping.ListLayoutElements(mxd, "GRAPHIC_ELEMENT", "b_rad")[0]
		trad.text=" "+ str(round(rdcion_sla,2))  +  " "	
		brad.elementHeight=(float(rdcion_sla)/float(150))
		
		arcpy.RefreshActiveView()
		#print str(tmp_mnma) + " " + str(tmp_mdia) 
	#print row.name

	
fcz = "c:\zfechas.dbf"
rowsz = arcpy.SearchCursor(fcz)
for rowx in rowsz:
	idkz= rowx.getValue("id_f")
	arcpy.AddMessage("\nID:" + str(idkz) + " Secuencia:"  + str(id_secuencia)  )
	if int(idkz) == int(id_secuencia) :
		tmp_mnma2 = rowx.getValue("tmp_mnma")
		tmp_mdia2 = rowx.getValue("tmp_mdia")
		tmp_mxma2 = rowx.getValue("tmp_mxma")	
		hmd_rel_mn2	= rowx.getValue("hmd_rel_mn")
		hmd_rel_md2	= rowx.getValue("hmd_rel_md")
		hmd_rel_mx2	= rowx.getValue("hmd_rel_mx")
		brllo_slar2	= rowx.getValue("brllo_slar")
		rdcion_sla2	= rowx.getValue("rdcion_sla")
		etp2	= rowx.getValue("etp")
		prcptcion2 = rowx.getValue("prcptcion")
		evp_clclad2 = rowx.getValue("evp_clclad")
		
		arcpy.AddMessage("\nprec:" + str(prcptcion2) )
		
		tprec2 = arcpy.mapping.ListLayoutElements(mxd, "TEXT_ELEMENT", "t_prec2")[0]
		bprec2 = arcpy.mapping.ListLayoutElements(mxd, "GRAPHIC_ELEMENT", "l_prec")[0]
		tprec2.text=" "+ str(round(prcptcion2,2)) +  " "	
		bprec2.elementHeight=(float(prcptcion2)/float(150))

		ttmin2 = arcpy.mapping.ListLayoutElements(mxd, "TEXT_ELEMENT", "t_tmin2")[0]
		btmin2 = arcpy.mapping.ListLayoutElements(mxd, "GRAPHIC_ELEMENT", "l_tmin")[0]
		ttmin2.text=" "+ str(round(tmp_mnma2,2)) +  " "	
		btmin2.elementHeight=(float(tmp_mnma2)/float(150))

		ttmed2 = arcpy.mapping.ListLayoutElements(mxd, "TEXT_ELEMENT", "t_tmed2")[0]
		btmed2 = arcpy.mapping.ListLayoutElements(mxd, "GRAPHIC_ELEMENT", "l_tmed")[0]
		ttmed2.text=" "+ str(round(tmp_mdia2,2))+  " "	
		btmed2.elementHeight=(float(tmp_mdia2)/float(150))

		ttmax2 = arcpy.mapping.ListLayoutElements(mxd, "TEXT_ELEMENT", "t_tmax2")[0]
		btmax2 = arcpy.mapping.ListLayoutElements(mxd, "GRAPHIC_ELEMENT", "l_tmax")[0]
		ttmax2.text=" "+ str(round(tmp_mxma2,2)) +  " "	
		btmax2.elementHeight=(float(tmp_mxma2)/float(150))

		tetp2 = arcpy.mapping.ListLayoutElements(mxd, "TEXT_ELEMENT", "t_etp2")[0]
		betp2 = arcpy.mapping.ListLayoutElements(mxd, "GRAPHIC_ELEMENT", "l_etp")[0]
		tetp2.text=" "+ str(round(etp2,2)) +  " "	
		betp2.elementHeight=(float(etp2)/float(150))

		tevp2 = arcpy.mapping.ListLayoutElements(mxd, "TEXT_ELEMENT", "t_evp2")[0]
		bevp2 = arcpy.mapping.ListLayoutElements(mxd, "GRAPHIC_ELEMENT", "l_evp")[0]
		tevp2.text=" "+ str(round(evp_clclad2,2)) +  " "	
		bevp2.elementHeight=(float(evp_clclad2)/float(150))

		thrmin2 = arcpy.mapping.ListLayoutElements(mxd, "TEXT_ELEMENT", "t_hrmin2")[0]
		bhrmin2 = arcpy.mapping.ListLayoutElements(mxd, "GRAPHIC_ELEMENT", "l_hrmin")[0]
		thrmin2.text=" "+ str(round(hmd_rel_mn,2))  +  " "	
		bhrmin2.elementHeight=(float(hmd_rel_mn)/float(150))

		thrmed2 = arcpy.mapping.ListLayoutElements(mxd, "TEXT_ELEMENT", "t_hrmed2")[0]
		bhrmed2 = arcpy.mapping.ListLayoutElements(mxd, "GRAPHIC_ELEMENT", "l_hrmed")[0]
		thrmed2.text=" "+ str(round(hmd_rel_md2,2)) +  " "	
		bhrmed2.elementHeight=(float(hmd_rel_md2)/float(150))

		thrmax2 = arcpy.mapping.ListLayoutElements(mxd, "TEXT_ELEMENT", "t_hrmax2")[0]
		bhrmax2 = arcpy.mapping.ListLayoutElements(mxd, "GRAPHIC_ELEMENT", "l_hrmax")[0]
		thrmax2.text=" "+str(round(hmd_rel_mx2,2))  +  " "	
		bhrmax2.elementHeight=(float(hmd_rel_mx2)/float(150))

		tbrillo2 = arcpy.mapping.ListLayoutElements(mxd, "TEXT_ELEMENT", "t_brillo2")[0]
		bbrillo2 = arcpy.mapping.ListLayoutElements(mxd, "GRAPHIC_ELEMENT", "l_brillo")[0]
		tbrillo2.text=" "+ str(round(brllo_slar2,2))  +  " "	
		bbrillo2.elementHeight=(float(brllo_slar2)/float(150))
		
		trad2 = arcpy.mapping.ListLayoutElements(mxd, "TEXT_ELEMENT", "t_rad2")[0]
		brad2 = arcpy.mapping.ListLayoutElements(mxd, "GRAPHIC_ELEMENT", "l_rad")[0]
		trad2.text=" "+ str(round(rdcion_sla2,2))  +  " "	
		brad2.elementHeight=(float(rdcion_sla2)/float(150))
		
		arcpy.RefreshActiveView()
		#print str(tmp_mnma) + " " + str(tmp_mdia) 
	#print row.name	


arcpy.RefreshActiveView()
#arcpy.mapping.ExportToPDF(mxd, r"C:\Doc1.pdf")
arcpy.mapping.ExportToPNG(mxd, r"C:\Documents and Settings\analsig2\Escritorio\Ulises_HdaLanegra\salidas_animacion\\" + id_secuencia+"_salida.png",resolution=300)

	
	







