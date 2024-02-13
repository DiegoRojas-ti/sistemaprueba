<?php


            error_reporting(E_ALL);
            $fichero = "RICARDOMARCELO.XML";
  echo           $mxml = '<?xml version="1.0" encoding="ISO-8859-1" standalone="no"?>
<DespatchAdvice 
xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" 
xmlns:xsd="http://www.w3.org/2001/XMLSchema" 
xmlns:ds="http://www.w3.org/2000/09/xmldsig#" 
xmlns:qdt="urn:oasis:names:specification:ubl:schema:xsd:QualifiedDatatypes-2" 
xmlns:sac="urn:sunat:names:specification:ubl:peru:schema:xsd:SunatAggregateComponents-1" 
xmlns:ext="urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2" 
xmlns:udt="urn:un:unece:uncefact:data:specification:UnqualifiedDataTypesSchemaModule:2" 
xmlns:cac="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2" 
xmlns:cbc="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2" 
xmlns="urn:oasis:names:specification:ubl:schema:xsd:DespatchAdvice-2">
    <ext:UBLExtensions>
        <ext:UBLExtension>
            <ext:ExtensionContent>
            </ext:ExtensionContent>
        </ext:UBLExtension>
    </ext:UBLExtensions>';
            $mxml1 = '<cbc:UBLVersionID>2.1</cbc:UBLVersionID>
    <cbc:CustomizationID>1.0</cbc:CustomizationID>
    <cbc:ID>numero de guia</cbc:ID>
    <cbc:IssueDate>fechadeguia</cbc:IssueDate>
    <cbc:DespatchAdviceTypeCode>09</cbc:DespatchAdviceTypeCode>
    <cbc:Note>Este es una guia de Remision</cbc:Note>';
            $mxml3 = '<cac:Signature>
        <cbc:ID>#SE</cbc:ID>
        <cac:SignatoryParty>
            <cac:PartyIdentification>
                <cbc:ID>ruc</cbc:ID>
            </cac:PartyIdentification>
            <cac:PartyName>
                <cbc:Name><![CDATA[razon social]]></cbc:Name>
            </cac:PartyName>
        </cac:SignatoryParty>
        <cac:DigitalSignatureAttachment>
            <cac:ExternalReference>
                <cbc:URI>#SEaa</cbc:URI>
            </cac:ExternalReference>
        </cac:DigitalSignatureAttachment>
    </cac:Signature>';
            $mxml4 = '<cac:DespatchSupplierParty>
        <cbc:CustomerAssignedAccountID schemeID="6">ruc</cbc:CustomerAssignedAccountID>
        <cac:Party>
            <cac:PartyLegalEntity>
                <cbc:RegistrationName><![CDATA[razon social]]></cbc:RegistrationName>
            </cac:PartyLegalEntity>
        </cac:Party>
    </cac:DespatchSupplierParty>
    <cac:DeliveryCustomerParty>
        <cbc:CustomerAssignedAccountID schemeID="6">ruc</cbc:CustomerAssignedAccountID>
        <cac:Party>
            <cac:PartyLegalEntity>
                <cbc:RegistrationName><![CDATA[nombre empresa]]></cbc:RegistrationName>
            </cac:PartyLegalEntity>
        </cac:Party>
    </cac:DeliveryCustomerParty>
    <cac:Shipment>';
            //Poner Joel

            $mxml5 = "<cbc:ID>1</cbc:ID> 
        <cbc:HandlingCode>aaa</cbc:HandlingCode>
        <cbc:Information>bbbb</cbc:Information>";

            $mxml6 = '
        <cbc:GrossWeightMeasure unitCode="NIU">AAAA</cbc:GrossWeightMeasure>
        <cbc:TotalTransportHandlingUnitQuantity>AAAA</cbc:TotalTransportHandlingUnitQuantity>
        <cbc:SplitConsignmentIndicator>BBBB</cbc:SplitConsignmentIndicator>';
            $mxml7 = '<cac:ShipmentStage>
            <cbc:ID>1</cbc:ID>
            <cbc:TransportModeCode>AAAAAAAAAA</cbc:TransportModeCode>
            <cac:TransitPeriod>
                <cbc:StartDate>QQQQQQ</cbc:StartDate>
            </cac:TransitPeriod>';
            //Si es Publico 01=Tiene que pedir el numero de ruc y la razon social de la empresa
            //en caso de que sea 02 tienes que poner el numero de placa del vehiculo, y el DNI del traspostista
            //publico : empresa
            $mxml8.= '<cac:CarrierParty>
                <cac:PartyIdentification>
                    <cbc:ID schemeID="6">QQ</cbc:ID>
                </cac:PartyIdentification>
                <cac:PartyName>
                    <cbc:Name>EEEE</cbc:Name>
                </cac:PartyName>
        </cac:CarrierParty>
        <cac:TransportMeans>
                <cac:RoadTransport>
                    <cbc:LicensePlateID>QQQQQQQQQQ</cbc:LicensePlateID>
                </cac:RoadTransport>
        </cac:TransportMeans>
        <cac:DriverPerson>
                <cbc:ID schemeID="1">QQQQQQQ</cbc:ID>
        </cac:DriverPerson>
        </cac:ShipmentStage>';

            $mxml9 = "<cac:Delivery>
          <cac:DeliveryAddress>
              <cbc:ID>QQQQQQQ</cbc:ID>
              <cbc:StreetName><![CDATA[AAAAAAAAAAAA]]></cbc:StreetName>
          </cac:DeliveryAddress>
        </cac:Delivery>";

            $mxml10.= '<cac:TransportHandlingUnit>
              <cbc:ID>AAAAA</cbc:ID>
           <cac:TransportEquipment>
              <cbc:ID>RRRRRRRRRRRR</cbc:ID>
           </cac:TransportEquipment>
           </cac:TransportHandlingUnit>';
            $mxml11 = "<cac:OriginAddress>
            <cbc:ID>CCCCCCCCCCCCCCC</cbc:ID>
            <cbc:StreetName><![CDATA[BBBBBBBBBBBBB]]></cbc:StreetName>
        </cac:OriginAddress>";
            $mxml12 = "<cac:FirstArrivalPortLocation>
            <cbc:ID>PAI</cbc:ID>
        </cac:FirstArrivalPortLocation>";
            //}
            $mxml13 = '
</cac:Shipment>';
                $mxml14.= '<cac:DespatchLine>
        <cbc:ID>1</cbc:ID>
        <cbc:DeliveredQuantity unitCode="NIU">100</cbc:DeliveredQuantity>
        <cac:OrderLineReference>
            <cbc:LineID>1</cbc:LineID>
        </cac:OrderLineReference>
        <cac:Item>
            <cbc:Description><![CDATA[TELA JERSEY]]></cbc:Description>
            <cbc:Name><![CDATA[TEL JERSEY]]></cbc:Name>            
            <cac:SellersItemIdentification>
                <cbc:ID>PJE</cbc:ID>
            </cac:SellersItemIdentification>
        </cac:Item>
    </cac:DespatchLine>';

            $mxmlF.= '</DespatchAdvice>';
            $mfiec = trim(basename($fichero) . PHP_EOL);
            file_put_contents($mfiec, $mxml, FILE_APPEND);
            file_put_contents($mfiec, $mxml1, FILE_APPEND);
            file_put_contents($mfiec, $mxml2, FILE_APPEND);
            file_put_contents($mfiec, $mxml3, FILE_APPEND);
            file_put_contents($mfiec, $mxml4, FILE_APPEND);
            file_put_contents($mfiec, $mxml5, FILE_APPEND);
            file_put_contents($mfiec, $mxml6, FILE_APPEND);
            file_put_contents($mfiec, $mxml7, FILE_APPEND);
            file_put_contents($mfiec, $mxml8, FILE_APPEND);
            file_put_contents($mfiec, $mxml9, FILE_APPEND);
            file_put_contents($mfiec, $mxml10, FILE_APPEND);
            file_put_contents($mfiec, $mxml11, FILE_APPEND);
            file_put_contents($mfiec, $mxml12, FILE_APPEND);
            file_put_contents($mfiec, $mxml13, FILE_APPEND);
            file_put_contents($mfiec, $mxml14, FILE_APPEND);
            file_put_contents($mfiec, $mxmlF, FILE_APPEND);

            echo "Archivo Creado";


?>