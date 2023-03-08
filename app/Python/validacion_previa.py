from asyncio.windows_events import NULL
from msilib.schema import Directory
from sre_constants import IN
import pandas as pd
import sys
import os





bandera = False
def Validador (data,d, name,indice,cuen, ced_ruc, cuenta, inconsis, aux):
    nulos=data[d.isnull()]
    nulos  = nulos[['CUEN', 'CEDULA_RUC','CUENTA_CONTRATO','INDEX']]
    if (nulos.size>0):
        aux=True
        #print("inconsistencias en " + name)
        array = nulos.to_numpy()
        print("-> Se tiene " + str(array.shape[0]) + " inconsistencias en la columna >>" + name)
        for i in array:
            indice.append(i[3])
            cuen.append(i[0])
            ced_ruc.append(i[1])
            cuenta.append(i[2])
            inconsis.append(name)
    return indice, cuen, ced_ruc, cuenta, inconsis, aux

name_inicial = sys.argv[1]
name_final = sys.argv[2]
print ("------>  LOG DE CARGA PREVIA DEL ARCHIVO " + name_inicial)
#print ("entra lo siguiente %s, %s", name_final, name_inicial)
indice=[]
cuen=[]
ced_ruc=[] 
cuenta=[]
inconsis = []


ruta_completa = os.path.abspath(os.path.join('data','data', name_inicial))

ruta_completa_final = os.path.abspath(os.path.join('data','inconsistencias','insconsistencias_'+name_final))

try:
   df = pd.read_csv(ruta_completa, sep=',',on_bad_lines='skip' )
   df['INDEX'] = df.index
   print(" -> archivo cargado correctamente")
except Exception as e:
    print("Error al leer el archivo: ", e)
    # Agrega aquí el código para manejar el error
else:
    print("El archivo se ha leido correctamente.")

#df = df.iloc[:df.index[df.shape[0]-1]] 
#df.to_csv(directorio+"/datos.txt", sep=",")

#df = df.drop(df.shape[0]+1, inplace=True)
#print("SI LEE EL PANDAS")
#

incondf=pd.DataFrame(columns=['LINEA_REGISTRO','CUEN', 'CUENTA_CONTRATO', 'CAMPOS_INCONSISTENCIAS'])

indice,cuen, ced_ruc, cuenta, inconsis, bandera=Validador(df, df.FECHA_EMISION, "FECHA DE EMISION",indice,cuen, ced_ruc, cuenta, inconsis,bandera)
indice,cuen, ced_ruc, cuenta, inconsis, bandera=Validador(df, df.FECHA_VENCIMIENTO, "FECHA DE VENCIMIENTO",indice,cuen, ced_ruc, cuenta, inconsis,bandera)
indice,cuen, ced_ruc, cuenta, inconsis, bandera=Validador(df, df.TIPO_DOCUMENTO, "TIPO DE DOCUMENTO",indice,cuen, ced_ruc, cuenta, inconsis, bandera)

#numero de documento 
valNroDoc = df[df.NRO_COMPROBANTE !="FACTURA - SIN FOLIO"]
indice,cuen, ced_ruc, cuenta, inconsis,bandera=Validador(valNroDoc, valNroDoc.NRO_COMPROBANTE, "NRO COMPROBANTE",indice,cuen, ced_ruc, cuenta, inconsis, bandera)
indice,cuen, ced_ruc, cuenta, inconsis,bandera=Validador(df, df.CUEN, "CUEN",indice,cuen, ced_ruc, cuenta, inconsis, bandera)

indice,cuen, ced_ruc, cuenta, inconsis,bandera =Validador(df, df.TIPO_DOCUMENTO, "TIPO DOCUMENTO",indice,cuen, ced_ruc, cuenta, inconsis, bandera)
indice,cuen, ced_ruc, cuenta, inconsis,bandera =Validador(df, df.CUENTA_CONTRATO, "CUENTA CONTRATO",indice,cuen, ced_ruc, cuenta, inconsis, bandera)
indice,cuen, ced_ruc, cuenta, inconsis,bandera =Validador(df, df.IDPROVINCIA, "PROVINCIA", indice,cuen, ced_ruc, cuenta, inconsis, bandera)
indice,cuen, ced_ruc, cuenta, inconsis,bandera=Validador(df, df.IDCANTON, "CANTON",indice,cuen, ced_ruc, cuenta, inconsis, bandera)
indice,cuen, ced_ruc, cuenta, inconsis,bandera=Validador(df, df.IDPARROQUIA, "PARROQUIA",indice, cuen, ced_ruc, cuenta, inconsis, bandera)

indice,cuen, ced_ruc, cuenta, inconsis,bandera=Validador(df, df.FECHA_NACIMIENTO, "FECHA NACIMIENTO",indice,cuen, ced_ruc, cuenta, inconsis, bandera)
indice,cuen, ced_ruc, cuenta, inconsis,bandera=Validador(df, df.TERCERA_EDAD, "TERCERA EDAD",indice,cuen, ced_ruc, cuenta, inconsis, bandera)
indice,cuen, ced_ruc, cuenta, inconsis,bandera=Validador(df, df.FECHA_INGRESO, "FECHA INGRESO", indice,cuen, ced_ruc, cuenta, inconsis, bandera)

indice,cuen, ced_ruc, cuenta, inconsis,bandera=Validador(df, df.CEDULA_RUC, "CEDULA O RUC",indice,cuen, ced_ruc, cuenta, inconsis,  bandera)
indice,cuen, ced_ruc, cuenta, inconsis,bandera=Validador(df, df.NOMBRE, "NOMBRE",indice,cuen, ced_ruc, cuenta, inconsis,  bandera)
indice,cuen, ced_ruc, cuenta, inconsis,bandera=Validador(df, df.ENERGIA, "ENERGIA",indice,cuen, ced_ruc, cuenta, inconsis, bandera)
indice,cuen, ced_ruc, cuenta, inconsis,bandera=Validador(df, df.VOLTAJE, "VOLTAJE",indice,cuen, ced_ruc, cuenta, inconsis, bandera)
indice,cuen, ced_ruc, cuenta, inconsis,bandera=Validador(df, df.CODIGO_TARIFA, "CODIGO TARIFA",indice,cuen, ced_ruc, cuenta, inconsis, bandera)
#indice,cuen, ced_ruc, cuenta, inconsis,bandera=Validador(df, df.DESCRIPCION_TARIFA, "DESCRIPCION TARIFA",indice,cuen, ced_ruc, cuenta, inconsis, bandera)
indice,cuen, ced_ruc, cuenta, inconsis,bandera=Validador(df, df.TIPO_USUARIO, "TIPO USUARIO",indice,cuen, ced_ruc, cuenta, inconsis, bandera)
indice,cuen, ced_ruc, cuenta, inconsis,bandera=Validador(df, df.TIPO_CONSUMO, "TIPO DE CONSUMO",indice,cuen, ced_ruc, cuenta, inconsis, bandera)
indice,cuen, ced_ruc, cuenta, inconsis,bandera=Validador(df, df.FECHA_INICIO, "FECHA INICIO",indice,cuen, ced_ruc, cuenta, inconsis, bandera)
indice,cuen, ced_ruc, cuenta, inconsis,bandera=Validador(df, df.FECHA_FIN, "FECHA FIN ",indice,cuen, ced_ruc, cuenta, inconsis, bandera)
indice,cuen, ced_ruc, cuenta, inconsis,bandera=Validador(df, df.LECTURA_ANTERIOR_A, "LECTURA ANTERIOR_A",indice,cuen, ced_ruc, cuenta, inconsis, bandera)
indice,cuen, ced_ruc, cuenta, inconsis,bandera=Validador(df, df.LECTURA_ACTUAL_A, "LECTURA ACTUAL_A",indice,cuen, ced_ruc, cuenta, inconsis, bandera)
indice,cuen, ced_ruc, cuenta, inconsis,bandera=Validador(df, df.LECTURA_ANTERIOR_B, "LECTURA ANTERIOR_B",indice,cuen, ced_ruc, cuenta, inconsis, bandera)
indice,cuen, ced_ruc, cuenta, inconsis,bandera=Validador(df, df.LECTURA_ACTUAL_B, "LECTURA ACTUAL_B",indice,cuen, ced_ruc, cuenta, inconsis, bandera)
indice,cuen, ced_ruc, cuenta, inconsis,bandera=Validador(df, df.LECTURA_ANTERIOR_C, "LECTURA ANTERIOR_C",indice,cuen, ced_ruc, cuenta, inconsis, bandera)
indice,cuen, ced_ruc, cuenta, inconsis,bandera=Validador(df, df.LECTURA_ACTUAL_C, "LECTURA ACTUAL_C",indice,cuen, ced_ruc, cuenta, inconsis, bandera)
indice,cuen, ced_ruc, cuenta, inconsis,bandera=Validador(df, df.LECTURA_ANTERIOR_D, "LECTURA ANTERIOR_D",indice,cuen, ced_ruc, cuenta, inconsis, bandera)
indice,cuen, ced_ruc, cuenta, inconsis,bandera=Validador(df, df.LECTURA_ACTUAL_D, "LECTURA ACTUAL_D",indice,cuen, ced_ruc, cuenta, inconsis, bandera)
#indice,cuen, ced_ruc, cuenta, inconsis,bandera=Validador(df, df.MRU, "MRU",indice,cuen, ced_ruc, cuenta, inconsis, bandera)
valEquipamiento = df[df.EQUIPAMIENTO!=0]
valEquipamiento = valEquipamiento[valEquipamiento.EQUIPAMIENTO!=80]
valEquipamiento = valEquipamiento[valEquipamiento.EQUIPAMIENTO!=20]
valEquipamiento = valEquipamiento[valEquipamiento.EQUIPAMIENTO!=100]
valEquipamiento  = valEquipamiento[['CUEN', 'CEDULA_RUC','CUENTA_CONTRATO','INDEX']]
if (valEquipamiento.size>0):
        print("-> "+str(valEquipamiento.size) +" inconsistencias en EQUIPAMIENTO ")
        array = valEquipamiento.to_numpy()
        for i in array:
            bandera=True
            indice.append(i[3])
            cuen.append(i[0])
            ced_ruc.append(i[1])
            cuenta.append(i[2])
            inconsis.append("EQUIPAMIENTO")


incondf['LINEA_REGISTRO']=indice
incondf['CUEN']=cuen
incondf['CUENTA_CONTRATO'] = cuenta
incondf['CAMPOS_INCONSISTENCIAS'] = inconsis

if bandera:
    incondf.to_csv(ruta_completa_final)
    print("-> Se genero un reporte de las inconsistencias encontradas Descargar Logs...")

