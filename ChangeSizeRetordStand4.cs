using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class ChangeSizeRetordStand4 : MonoBehaviour
{
     // Specifying when object is dragged
    void OnMouseDown() {
        transform.localScale = new Vector3 (0.5f,0.5f,0);
        }
}



